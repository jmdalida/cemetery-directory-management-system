<?php 
class SuperAdmin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('superadmin_model');
        $this->load->helper('url_helper');
        date_default_timezone_set('Asia/Manila');
         if($this->session->userdata('logged_in') !== TRUE){
      redirect('login/index');
    }
    }

    function index()
    {
        $data['available'] = 0;
        $data['reserved'] = 0;
        $data['occupied'] = 0;

        $data['lot_count'] = $this->superadmin_model->getCount();

        foreach ($data['lot_count'] as $count) {
            if ($count['owner_lot_id'] == null) {
                $data['available']++;        
            } else {
                if ($count['occupant_id'] == null) {
                    $data['reserved']++;
                } else {
                    if ($count['date_transfered'] != null) {
                        $data['reserved']++;
                    } else {
                        $data['occupied']++;
                    }
                }
            }
        }
        if($this->session->userdata('level')==='admin'){ 

            $this->load->view('superadmin_templates/header');
            $this->load->view('superadmin_templates/body',$data);
            $this->load->view('superadmin/home',$data);
            $this->load->view('superadmin_templates/footer');   
        }else{
          echo "Access Denied";
        }
    }
    function staff(){
    //Allowing akses to staff only
       $data['available'] = 0;
        $data['reserved'] = 0;
        $data['occupied'] = 0;

        $data['lot_count'] = $this->superadmin_model->getCount();

        foreach ($data['lot_count'] as $count) {
            if ($count['owner_lot_id'] == null) {
                $data['available']++;        
            } else {
                if ($count['occupant_id'] == null) {
                    $data['reserved']++;
                } else {
                    if ($count['date_transfered'] != null) {
                        $data['reserved']++;
                    } else {
                        $data['occupied']++;
                    }
                }
            }
        }
        if($this->session->userdata('level')==='staff'){ 

            $this->load->view('superadmin_templates/header');
            $this->load->view('superadmin_templates/body',$data);
            $this->load->view('superadmin/home',$data);
            $this->load->view('superadmin_templates/footer');   
        }else{
          echo "Access Denied";
        }
  }
    public function view()
    {
        $data['records'] = $this->superadmin_model->get_user_records();

        if (empty($data['records']))
        {
            show_404();
        };
       
        $this->load->view('superadmin_templates/header', $data);
        $this->load->view('superadmin_templates/body', $data);
        $this->load->view('superadmin/view', $data);
        $this->load->view('superadmin_templates/footer', $data);   
    }

    public function view_user_details($slug = NULL)
    {
        $data['user_records'] = $this->superadmin_model->get_user_records($slug);


        if (empty($data['user_records']))
        {
            show_404();
        }

        $this->load->view('superadmin_templates/header', $data);
        $this->load->view('superadmin_templates/body', $data);
        $this->load->view('superadmin/view_details', $data);
        $this->load->view('superadmin_templates/footer', $data);   
    }
     public function view_user_profile($slug = NULL)
    {
        $data['user_records'] = $this->superadmin_model->get_user_records($slug);


        if (empty($data['user_records']))
        {
            show_404();
        }

        $this->load->view('superadmin_templates/header', $data);
        $this->load->view('superadmin_templates/body', $data);
        $this->load->view('superadmin/view_profile', $data);
        $this->load->view('superadmin_templates/footer', $data);   
    }

    public function add()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('firstname', 'First Name', 'required' );
        $this->form_validation->set_rules('middlename', 'Middle Name', 'required' );
        $this->form_validation->set_rules('lastname', 'Last Name', 'required' );
        $this->form_validation->set_rules('address', 'Address', 'required' );
        $this->form_validation->set_rules('contact_no', 'Contact No.', 'required|numeric' );
        $this->form_validation->set_rules('username', 'Username', 'required' );
        $this->form_validation->set_rules('password', 'Password', 'required' );
        $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]' );

        if ($this->form_validation->run() === FALSE)
        {     
            $this->load->view('superadmin_templates/header');
            $this->load->view('superadmin_templates/body');
            $this->load->view('superadmin/add');
            $this->load->view('superadmin_templates/footer');       
        }
        else
        {
            //Upload Image
            $config['upload_path'] = './admin_template/images/posts';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['max_width'] = '500';
            $config['max_height'] = '500';

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload())
            {
                $errors= array('error' => $this->upload->display_errors());
                $post_image = 'noimage.jpg';
            }
            else
            {
                $data= array('upload_data' => $this->upload->data());
                $post_image = $_FILES['userfile']['name'];     
            }
           
            $this->superadmin_model->add_user_records($post_image);
            $this->session->set_flashdata('user_registered', 'You are now registered and can login!');
            redirect('superadmin/view');
        }
    }  

    public function edit($slug)
    {
        $data['user_records'] = $this->superadmin_model->get_user_records($slug);
      
        $this->form_validation->set_rules('firstname', 'First Name', 'required' );
        $this->form_validation->set_rules('middlename', 'Middle Name', 'required' );
        $this->form_validation->set_rules('lastname', 'Last Name', 'required' );
        $this->form_validation->set_rules('address', 'Address', 'required' );
        $this->form_validation->set_rules('contactno', 'Contact No.', 'required|numeric' );
        $this->form_validation->set_rules('username', 'Username', 'required' );
        $this->form_validation->set_rules('password', 'New Password', 'required' );
        $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]' );

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('superadmin_templates/header', $data);
            $this->load->view('superadmin_templates/body', $data);
            $this->load->view('superadmin/edit', $data);
            $this->load->view('superadmin_templates/footer', $data);   
        }                  
    }

    public function update()
    {
        $this->superadmin_model->update_user_records();
        $this->session->set_flashdata('updated', 'YOur user information has been updated and you can login!');
        redirect('superadmin/view');
    }
    public function burial_type()
    {
       $data['burial_type'] = $this->superadmin_model->get_burial_type_records();
      
      if (empty($data['burial_type']))
       {
          show_404();
       }; 

       $this->load->view('superadmin_templates/header',$data);
       $this->load->view('superadmin_templates/body',$data);
        $this->load->view('superadmin/burial_type',$data);
        $this->load->view('superadmin_templates/footer',$data);      
    }

    public function add_burial_type()
    {
   
        $this->load->helper('form');
        $this->load->library('form_validation');


        $this->form_validation->set_rules('type_name', 'Burial Type', 'required' );
        

        if ($this->form_validation->run() === FALSE)
        {     
            $this->load->view('superadmin_templates/header');
            $this->load->view('superadmin_templates/body');
            $this->load->view('superadmin/burial_type');
            $this->load->view('superadmin_templates/footer');     
        }
        else
        {
            $this->superadmin_model->add_burial_type_records();
            $this->session->set_flashdata('burial_type_created','The burial type has been created succesfully!');
            redirect('superadmin/burial_type');
        }         
    }

    public function edit_burial_type($slug)
    {
       $data['burial_records'] = $this->superadmin_model->get_burial_type_records();
       $data['burial_type'] = $this->superadmin_model->get_burial_type_records($slug);
        $this->load->helper('form');
        $this->load->library('form_validation');


        $this->form_validation->set_rules('type_name', 'Burial Type', 'required' );
        

        if ($this->form_validation->run() === FALSE)
        {     
            $this->load->view('superadmin_templates/header',$data);
            $this->load->view('superadmin_templates/body',$data);
            $this->load->view('superadmin/edit_burial_type',$data);
            $this->load->view('superadmin_templates/footer',$data);     
        }                 
    }

    public function update_burial_type()
    {
        $this->superadmin_model->update_burial_type_records();
        $this->session->set_flashdata('burial_type_updated', 'The burial type has been updated!');
        redirect('superadmin/burial_type');
    } 

    public function view_garden()
    {

       $data['garden_records'] = $this->superadmin_model-> get_garden_records();

      if (empty($data['garden_records']))
       {
           show_404();
       } 

        $this->load->view('superadmin_templates/header');
        $this->load->view('superadmin_templates/body_extend');
        $this->load->view('superadmin/view_garden',$data);    
    }

    public function add_garden()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('garden_name', 'Garden', 'required' );
        
        if ($this->form_validation->run() === FALSE)
        {     
            $this->load->view('superadmin_templates/header');
            $this->load->view('superadmin_templates/body_extend'); 
            $this->load->view('superadmin/add_garden');    
        } 
        else
        {
            $this->superadmin_model->add_garden_records();
            $this->session->set_flashdata('garden_created','The garden location has been created succesfully!');
            redirect('superadmin/view_garden');

        }
      
    }

    public function edit_garden($slug)
    {
        $data['garden_records'] = $this->superadmin_model-> get_garden_records($slug);

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('garden_name', 'Garden', 'required' );
        

        if ($this->form_validation->run() === FALSE)
        {     
            $this->load->view('superadmin_templates/header');
            $this->load->view('superadmin_templates/body_extend'); 
            $this->load->view('superadmin/edit_garden', $data);    
        }                     
    }

    public function update_garden()
    {
        $this->superadmin_model->update_garden_records();
        $this->session->set_flashdata('garden_updated', 'The garden location has been updated!');
        redirect('superadmin/view_garden');
    } 

    public function view_block()
    {
        $data['block_records'] = $this->superadmin_model-> get_block_records();

        if (empty($data['block_records']))
        {
            show_404();
        }; 

        $this->load->view('superadmin_templates/header',$data);
        $this->load->view('superadmin_templates/body_extend', $data);
        $this->load->view('superadmin/view_block', $data);   
    }

    public function add_block()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['garden'] = $this->superadmin_model-> get_garden_records();

        $this->form_validation->set_rules('block_name', 'Block', 'required' );
        

        if ($this->form_validation->run() === FALSE)
        {     
            $this->load->view('superadmin_templates/header', $data); 
            $this->load->view('superadmin_templates/body_extend', $data); 
            $this->load->view('superadmin/add_block', $data);    
        }
        else
        {
            $this->superadmin_model->add_block_records();
            $this->session->set_flashdata('block_created', 'The block location has been created succesfully!');
            redirect('superadmin/view_block');
        }      
    }

    public function edit_block($slug)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['block_records'] = $this->superadmin_model-> get_block_records($slug);
        $data['garden'] = $this->superadmin_model-> get_garden_records();


        $this->form_validation->set_rules('block_name', 'Block', 'required' );
        

        if ($this->form_validation->run() === FALSE)
        {     
            $this->load->view('superadmin_templates/header', $data); 
            $this->load->view('superadmin_templates/body_extend', $data);
            $this->load->view('superadmin/edit_block', $data);    
        }                   
    }

    public function update_block()
    {
        $this->superadmin_model->update_block_records();
        $this->session->set_flashdata('block_updated', 'The block location has been updated!');
        redirect('superadmin/view_block');
    } 

    public function view_lot()
    {
        $data['lot_records'] = $this->superadmin_model->get_lot_records();
       if (empty($data['lot_records']))
        {
           show_404();
       }; 
       
        $this->load->view('superadmin_templates/header', $data);
        $this->load->view('superadmin_templates/body', $data);
        $this->load->view('superadmin/view_lot',$data);
    }

    public function add_lot()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['block'] = $this->superadmin_model-> get_block_records();
        $data['burial_type'] = $this->superadmin_model->get_burial_type_records();

        $this->form_validation->set_rules('lot_name', 'Lot', 'required' );
        

        if ($this->form_validation->run() === FALSE)
        {     
            $this->load->view('superadmin_templates/header', $data);
             $this->load->view('superadmin_templates/body_extend', $data);
            $this->load->view('superadmin/add_lot', $data);    
        }
        else
        {
            $this->superadmin_model->add_lot_records();
            $this->session->set_flashdata('lot_created', 'The lot location has been created succesfully!');
            redirect('superadmin/view_lot');
        }      
    }

    public function edit_lot($slug)
    {
        
        $data['lot_records'] = $this->superadmin_model-> get_lot_records($slug);
        $data['block'] = $this->superadmin_model-> get_block_records();
        $data['burial_type'] = $this->superadmin_model->get_burial_type_records();

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('lot_name', 'Lot', 'required' );
        
        if ($this->form_validation->run() === FALSE)
        {     
            $this->load->view('superadmin_templates/header', $data);
             $this->load->view('superadmin_templates/body_extend', $data); 
            $this->load->view('superadmin/edit_lot', $data);    
        }     
                     
    }

    public function update_lot()
    {
        $this->superadmin_model->update_lot_records();
        $this->session->set_flashdata('lot_updated', 'The lot location has been updated!');
        redirect('superadmin/view_lot');
    } 

    public function map_index()
    {       
        $this->load->view('superadmin/map_index');     
    }

    public function search_burial($fname  = null,$lname = null)
    {
        
        $this->db->select('*');
        $this->db->from('burialrec_deceased');
        $this->db->join('lots', 'burialrec_deceased.lot_id = lots.lot_id');
        $this->db->join('blocks', 'burialrec_deceased.block_id = blocks.block_id');
        $this->db->join('garden', 'burialrec_deceased.garden_id = garden.garden_id');
        $this->db->where('deceased_firstname',$fname);
        $this->db->where('deceased_lastname',$lname);

        $data = $this->db->get()->row();
        //echo json_encode($data);
        echo print_r($data);
        //return $data  ;
    }

    public function map_lots()
    {
        $this->db->select('*');
        $this->db->from('lot');
        $this->db->join('block', 'lot.block_id = block.block_id');
        $this->db->join('garden', 'block.garden_id = garden.garden_id');
        $this->db->join('burial_type', 'lot.type_id = burial_type.type_id ');
        $data = $this->db->get()->result_array();
        echo json_encode($data);
    } 

    public function map_blocks()
    {

        $data = $this->db->get('block')->result();
        echo json_encode($data);
    }   

    public function map_gardens()
    {
        $data = $this->db->get('garden')->result();
        echo json_encode($data);
    } 

    public function lot($id = FALSE) 
    {
        $this->db->select('*');
        $this->db->from('lot');
        $this->db->join('block', 'lot.block_id = block.block_id');
        $this->db->join('garden', 'block.garden_id = garden.garden_id');
        $this->db->join('burial_type', 'lot.type_id = burial_type.type_id ');
        $this->db->where('lot_id', $id);
        $data = $this->db->get()->row();
        echo json_encode($data);

    }  
    public function add_reserved_or_occupied()
    {
        $this->load->view('superadmin_templates/header');
        $this->load->view('superadmin_templates/body');
        $this->load->view('superadmin/add_reserved_or_occupied');
        $this->load->view('superadmin_templates/footer');  
    }
    public function add_owner_lot()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        /*$data['records'] = $this->superadmin_model->get_ownership_records();*/

        $data['country'] = $this->superadmin_model->get_ownership_country();
        $data['lot_records'] = $this->superadmin_model->get_lot_records();

          $sql = "
            SELECT count(A.lot_id) as available
            FROM LOT A
            INNER JOIN block B ON B.block_id = A.block_id
            INNER JOIN garden C ON C.garden_id = B.garden_id
            INNER JOIN burial_type D ON D.type_id = A.type_id
            LEFT JOIN owner_lot E ON E.lot_id = A.lot_id
            LEFT JOIN owner F ON F.owner_id = E.owner_id
            LEFT JOIN occupant G ON G.owner_lot_id = E.owner_lot_id 
            WHERE G.occupant_id IS NULL AND F.owner_id IS NULL
        ";

         $available_count = $this->db->query($sql)->row()->available;

         if ($available_count <= 0) {    
            $this->load->view('superadmin_templates/header',$data);
            $this->load->view('superadmin_templates/body',$data);
            $this->load->view('superadmin/add_owner_no_available_lot', $data);

            $this->load->view('superadmin_templates/footer',$data);    
            return;    
         }
     
        $this->form_validation->set_rules('owner_email', 'Email', 'required' );
        $this->form_validation->set_rules('owner_contactno', 'Contact No.', 'required|numeric' );
        $this->form_validation->set_rules('owner_firstname', 'First Name', 'required' );
        $this->form_validation->set_rules('owner_middlename', 'Middle Name', 'required' );
        $this->form_validation->set_rules('owner_lastname', 'Last Name', 'required' );
        $this->form_validation->set_rules('owner_street&brgy', 'Street & Baranggay', 'required' );
        $this->form_validation->set_rules('owner_city/municipality', 'City/Municipality', 'required' );
        $this->form_validation->set_rules('owner_province', 'Province', 'required' );
        $this->form_validation->set_rules('date_avail', 'Date Avail', 'required' );

        if ($this->form_validation->run() === FALSE)
        { 
            $this->load->view('superadmin_templates/header',$data);
            $this->load->view('superadmin_templates/body_extend',$data);
            $this->load->view('superadmin/add_owner_lot',$data);
           // $this->load->view('superadmin_templates/footer');      
        }
        else
        {
            $this->superadmin_model->add_ownership_records();
            $this->session->set_flashdata('owner_lot_created', 'The reserved lot information has been created!');
            redirect('superadmin/view_owner');
        } 
    }

    public function view_owner()
    {
        $data['owner_lots'] = $this->superadmin_model->get_owner_lot_record();
/*        $data['deceased_records'] = $this->superadmin_model->get_deceased_records();*/
       
        $this->load->view('superadmin_templates/header', $data);
        $this->load->view('superadmin_templates/body_extend', $data);
        $this->load->view('superadmin/view_owner', $data);
        $this->load->view('superadmin_templates/footer', $data);
    }
    public function view_owner_details($slug)
    {
        $data['owner_records'] = $this->superadmin_model-> get_owner_lot_record($slug);
      
        $this->load->view('superadmin_templates/header', $data);
        $this->load->view('superadmin_templates/body', $data);
        $this->load->view('superadmin/view_owner_details', $data);
    /*    $this->load->view('superadmin_templates/footer', $data); */    
    }
    public function view_owner_details_copy($slug)
    {
        $data['owner_records'] = $this->superadmin_model-> get_owner_lot_record($slug);
      
        $this->load->view('superadmin_templates/header', $data);
        $this->load->view('superadmin_templates/body', $data);
        $this->load->view('superadmin/view_owner_details_copy', $data);
    /*    $this->load->view('superadmin_templates/footer', $data); */    
    }
    public function add_deceased($owner_id, $lot_id)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['country'] = $this->superadmin_model->get_ownership_country();
        $data['countries'] = $this->superadmin_model->get_owner_country();
        $data['lot_records'] = $this->superadmin_model->get_lot_records();
        $data['lot_id'] = $lot_id;
        $data['owner_id'] = $owner_id;

         $sql = "
            SELECT count(A.lot_id) as reserved
              FROM LOT A
              INNER JOIN block B ON B.block_id = A.block_id
              INNER JOIN garden C ON C.garden_id = B.garden_id
              INNER JOIN burial_type D ON D.type_id = A.type_id
                LEFT JOIN owner_lot E ON E.lot_id = A.lot_id
                LEFT JOIN owner F ON F.owner_id = E.owner_id
                    LEFT JOIN occupant G ON G.owner_lot_id = E.owner_lot_id
                    WHERE IFNULL(E.date_transfered,0) = 0
                    AND IFNULL(E.lot_id,0) != 0

        ";

         $resereved_count = $this->db->query($sql)->row()->reserved;

         if ($resereved_count <= 0) {    
            $this->load->view('superadmin_templates/header',$data);
            $this->load->view('superadmin_templates/body',$data);
            $this->load->view('superadmin/add_owner_no_reserved_lot', $data);

            $this->load->view('superadmin_templates/footer',$data);    
            return;    
         }

        $this->form_validation->set_rules('occupant_firstname', 'Firstname', 'required' );
        $this->form_validation->set_rules('occupant_middlename', 'Middle Name', 'required' );
        $this->form_validation->set_rules('occupant_lastname', 'Last Name', 'required' );
        $this->form_validation->set_rules('occupant_gender', 'Gender', 'required' );
        $this->form_validation->set_rules('occupant_birthplace', 'Place of Birth', 'required' );
        $this->form_validation->set_rules('occupant_deathplace', 'Place of Death', 'required' );
        $this->form_validation->set_rules('occupant_causeofdeath', 'Cause of Death', 'required' );
        $this->form_validation->set_rules('occupant_dateofbirth', 'Date of Birth', 'required' );
        $this->form_validation->set_rules('occupant_dateofdeath', 'Date of Place', 'required' );
        
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('superadmin_templates/header', $data);
            $this->load->view('superadmin_templates/body_extend', $data);
            $this->load->view('superadmin/add_deceased', $data);  
        } 
        else
        {
            $curr_owner_lot = $this->superadmin_model->get_curr_owner_lot($owner_id, $lot_id);
            if ($curr_owner_lot['date_transfered'] == null) {
                $this->superadmin_model->updateOccupant($curr_owner_lot['owner_lot_id']);
            }

            $this->superadmin_model->add_deceased_records($owner_id, $lot_id);
            $this->session->set_flashdata('owner_lot_created', 'The reserved lot information has been created!');
            redirect('superadmin/view_deceased');
        }                           
    }
     public function add_deceased_copy($owner_id, $lot_id)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['country'] = $this->superadmin_model->get_ownership_country();
        $data['countries'] = $this->superadmin_model->get_ownership_country();
        $data['lot_records'] = $this->superadmin_model->get_lot_records();
        $data['lot_id'] = $lot_id;
        $data['owner_id'] = $owner_id;

         $sql = "
            SELECT count(A.lot_id) as reserved
              FROM LOT A
              INNER JOIN block B ON B.block_id = A.block_id
              INNER JOIN garden C ON C.garden_id = B.garden_id
              INNER JOIN burial_type D ON D.type_id = A.type_id
                LEFT JOIN owner_lot E ON E.lot_id = A.lot_id
                LEFT JOIN owner F ON F.owner_id = E.owner_id
                    LEFT JOIN occupant G ON G.owner_lot_id = E.owner_lot_id
                    WHERE IFNULL(E.date_transfered,0) = 0
                    AND IFNULL(E.lot_id,0) != 0

        ";

         $resereved_count = $this->db->query($sql)->row()->reserved;

         if ($resereved_count <= 0) {    
            $this->load->view('superadmin_templates/header',$data);
            $this->load->view('superadmin_templates/body',$data);
            $this->load->view('superadmin/add_owner_no_reserved_lot', $data);

            $this->load->view('superadmin_templates/footer',$data);    
            return;    
         }

        $this->form_validation->set_rules('occupant_firstname', 'Firstname', 'required' );
        $this->form_validation->set_rules('occupant_middlename', 'Middle Name', 'required' );
        $this->form_validation->set_rules('occupant_lastname', 'Last Name', 'required' );
        $this->form_validation->set_rules('occupant_gender', 'Gender', 'required' );
        $this->form_validation->set_rules('occupant_birthplace', 'Place of Birth', 'required' );
        $this->form_validation->set_rules('occupant_deathplace', 'Place of Death', 'required' );
        $this->form_validation->set_rules('occupant_causeofdeath', 'Cause of Death', 'required' );
        $this->form_validation->set_rules('occupant_dateofbirth', 'Date of Birth', 'required' );
        $this->form_validation->set_rules('occupant_dateofdeath', 'Date of Place', 'required' );
        
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('superadmin_templates/header', $data);
            $this->load->view('superadmin_templates/body_extend', $data);
            $this->load->view('superadmin/add_deceased_copy', $data);  
        } 
        else
        {
            $curr_owner_lot = $this->superadmin_model->get_curr_owner_lot($owner_id, $lot_id);
            if ($curr_owner_lot['date_transfered'] == null) {
                $this->superadmin_model->updateOccupant($curr_owner_lot['owner_lot_id']);
            }

            $this->superadmin_model->add_deceased_records($owner_id, $lot_id);
            $this->session->set_flashdata('owner_lot_created', 'The reserved lot information has been created!');
            redirect('superadmin/view_deceased');
        }                           
    }
    public function view_deceased()
    {
        $data['owner_lots'] = $this->superadmin_model->get_deceased_lot_record();
       /* $data['owner_lots'] = $this->superadmin_model->get_owner_lot_record();*/

        $this->load->view('superadmin_templates/header',$data);
        $this->load->view('superadmin_templates/body_extend',$data);
        $this->load->view('superadmin/view_deceased',$data);
        $this->load->view('superadmin_templates/footer', $data); 
    }
    public function view_lot_history()
    {
        $data['owner_lots'] = $this->superadmin_model->get_lot_lists();
       /* $data['owner_lots'] = $this->superadmin_model->get_owner_lot_record();*/

        $this->load->view('superadmin_templates/header',$data);
        $this->load->view('superadmin_templates/body',$data);
        $this->load->view('superadmin/view_lot_history',$data);
        $this->load->view('superadmin_templates/footer', $data); 
    }
    public function view_deceased_owner($slug)
    {
        $data['owner_lots'] = $this->superadmin_model->get_deceased_lot_record($slug);
       /* $data['owner_lots'] = $this->superadmin_model->get_owner_lot_record();*/

        $this->load->view('superadmin_templates/header',$data);
        $this->load->view('superadmin_templates/body_extend',$data);
        $this->load->view('superadmin/view_deceased_owner',$data);
        $this->load->view('superadmin_templates/footer', $data); 
    }
    public function view_deceased_owner_copy($slug)
    {
        $data['owner_lots'] = $this->superadmin_model->get_deceased_lot_record($slug);
       /* $data['owner_lots'] = $this->superadmin_model->get_owner_lot_record();*/

        $this->load->view('superadmin_templates/header',$data);
        $this->load->view('superadmin_templates/body_extend',$data);
        $this->load->view('superadmin/view_deceased_owner_copy',$data);
        $this->load->view('superadmin_templates/footer', $data); 
    }
    public function view_deceased_details($slug)
    {
        
        $data['owner_records'] = $this->superadmin_model->get_owner_lot_records($slug);
    
        $this->load->view('superadmin_templates/header', $data);
        $this->load->view('superadmin_templates/body', $data);
        $this->load->view('superadmin/view_deceased_details', $data);
        $this->load->view('superadmin_templates/footer', $data);

    }

    public function view_owner_deceased_details($slug)
    {
        
        $data['owner_records'] = $this->superadmin_model->get_owner_lot_records($slug);
    
        $this->load->view('superadmin_templates/header', $data);
        $this->load->view('superadmin_templates/body', $data);
        $this->load->view('superadmin/view_owner_deceased_details', $data);
        $this->load->view('superadmin_templates/footer', $data);

    }

    public function add_deceased_owner()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['country'] = $this->superadmin_model->get_ownership_country();
        $data['countries'] = $this->superadmin_model->get_ownership_country();
        $data['lot_records'] = $this->superadmin_model->get_lot_records();

           $sql = "
            SELECT count(A.lot_id) as available
            FROM LOT A
            INNER JOIN block B ON B.block_id = A.block_id
            INNER JOIN garden C ON C.garden_id = B.garden_id
            INNER JOIN burial_type D ON D.type_id = A.type_id
            LEFT JOIN owner_lot E ON E.lot_id = A.lot_id
            LEFT JOIN owner F ON F.owner_id = E.owner_id
            LEFT JOIN occupant G ON G.owner_lot_id = E.owner_lot_id 
            WHERE G.occupant_id IS NULL AND F.owner_id IS NULL
        ";

         $available_count = $this->db->query($sql)->row()->available;

         if ($available_count <= 0) {    
            $this->load->view('superadmin_templates/header',$data);
            $this->load->view('superadmin_templates/body',$data);
            $this->load->view('superadmin/add_owner_no_available_lot', $data);

            $this->load->view('superadmin_templates/footer',$data);    
            return;    
         }
    
        $this->form_validation->set_rules('occupant_firstname', 'Firstname', 'required' );
        $this->form_validation->set_rules('occupant_middlename', 'Middle Name', 'required' );
        $this->form_validation->set_rules('occupant_lastname', 'Last Name', 'required' );
        $this->form_validation->set_rules('occupant_gender', 'Gender', 'required' );
        $this->form_validation->set_rules('occupant_birthplace', 'Place of Birth', 'required' );
        $this->form_validation->set_rules('occupant_deathplace', 'Place of Death', 'required' );
        $this->form_validation->set_rules('occupant_causeofdeath', 'Cause of Death', 'required' );
        $this->form_validation->set_rules('occupant_dateofbirth', 'Date of Birth', 'required' );
        $this->form_validation->set_rules('occupant_dateofdeath', 'Date of Place', 'required' );
        $this->form_validation->set_rules('owner_email', 'Email', 'required' );
        $this->form_validation->set_rules('owner_contactno', 'Contact No.', 'required|numeric' );
        $this->form_validation->set_rules('owner_firstname', 'First Name', 'required' );
        $this->form_validation->set_rules('owner_middlename', 'Middle Name', 'required' );
        $this->form_validation->set_rules('owner_lastname', 'Last Name', 'required' );
        $this->form_validation->set_rules('owner_street&brgy', 'Street & Baranggay', 'required' );
        $this->form_validation->set_rules('owner_city/municipality', 'City/Municipality', 'required' );
        $this->form_validation->set_rules('owner_province', 'Province', 'required' );
        $this->form_validation->set_rules('date_avail', 'Date Avail', 'required' );
        
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('superadmin_templates/header', $data);
            $this->load->view('superadmin_templates/body_extend', $data);
            $this->load->view('superadmin/add_deceased_owner', $data);  
        } 
        else
        {
            $this->superadmin_model->add_deceased_owner();
            $this->session->set_flashdata('owner_lot_created', 'The reserved lot information has been created!');
            redirect('superadmin/view_deceased');
        }                           
    }

   /*  public function edit_deceased($slug)
    {
        $data['dec_records'] = $this->superadmin_model->get_dec_records($slug);
      
       $this->form_validation->set_rules('occupant_firstname', 'Firstname', 'required' );
        $this->form_validation->set_rules('occupant_middlename', 'Middle Name', 'required' );
        $this->form_validation->set_rules('occupant_lastname', 'Last Name', 'required' );
        $this->form_validation->set_rules('occupant_gender', 'Gender', 'required' );
        $this->form_validation->set_rules('occupant_dateofbirth', 'Date of Birth', 'required' );
        $this->form_validation->set_rules('occupant_dateofdeath', 'Date of Place', 'required' );

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('superadmin_templates/header', $data);
            $this->load->view('superadmin_templates/body_extend', $data);
            $this->load->view('superadmin/edit_dec_owner', $data);    
        }                  
    }

    public function update_deceased()
    {
        $this->superadmin_model->update_dec_records(
        );
        $this->session->set_flashdata('updated', 'Occupant information has been updated!');
        redirect('superadmin/view_deceased');
    }*/

    public function transfer_deceased()
    {
        $this->superadmin_model->updateOccupant();
        redirect('superadmin/view_deceased');
    }
        

}