<?php
 
class SuperAdmin_Model extends CI_Model 
{
    public function _contruct()
    {
        $this->load->database();
    }

    public function getCount()
    {
        $data = $this->db->query("SELECT l.*, ol.*, o.occupant_id FROM lot l
                                LEFT JOIN (SELECT * FROM owner_lot ol1
                                        WHERE ol1.owner_lot_id = (SELECT MAX(ol2.owner_lot_id) as owner_lot_id FROM owner_lot ol2
                                      WHERE ol2.lot_id=ol1.lot_id)) ol ON l.lot_id=ol.lot_id
                                LEFT JOIN occupant o ON o.owner_lot_id=ol.owner_lot_id
                GROUP BY l.lot_id");
        return $data->result_array();
    }

    public function get_user_records($slug = FALSE) 
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('user_account');
            return $query->result_array();
        }
        /*$query = $this->db->get_where('user_account', array('user_id' => $slug));
          return $query->row_array();/*/

        $this->db->select('*');
        $this->db->from('user_account');
        $this->db->where('user_id',$slug);

        $query_result =  $this->db->get()->row_array();
        return $query_result;
    }

    public function updateOccupant($owner_lot_id = FALSE)
    {
        if ($owner_lot_id === FALSE) {
            $data = array('date_transfered' => $this->input->post('date') );
            $this->db->where('owner_lot_id', $this->input->post('id'));
        } else {
            $data = array('date_transfered' => date('Y-m-d'));
            $this->db->where('owner_lot_id', $owner_lot_id);
        }
        $this->db->update('owner_lot', $data);
    }

    public function add_user_records($post_image) 
    {
        $this->load->helper('url');

        $data = array(

            'firstname' => $this->input->post('firstname'),
            'middlename' => $this->input->post('middlename'),
            'lastname' => $this->input->post('lastname'),
            'address' => $this->input->post('address'),
            'contact_no' => $this->input->post('contact_no'),
            'username' => $this->input->post('username'),
            'user_level' => $this->input->post('user_level'),
            'password' => $this->input->post('password'),
            'post_image' => $post_image              
        );
        return $this->db->insert('user_account', $data);
    }

   
    public function update_user_records() 
    {
       $this->load->helper('url');

        $data = array(

            'firstname' => $this->input->post('firstname'),
            'middlename' => $this->input->post('middlename'),
            'lastname' => $this->input->post('lastname'),
            'address' => $this->input->post('address'),
            'contact_no' => $this->input->post('contact_no'),
            'username' => $this->input->post('username'),
            'user_level' => $this->input->post('user_level'),
            'password' => $this->input->post('password'),
                         
        );

        $this->db->where('user_id', $this->input->post('user_id'));
       return $this->db->update('user_account', $data);
    }
    public function get_ownership_country($slug = FALSE)
    {

        if ($slug === FALSE)
       {
           
           $query = $this->db->get('country');
           return $query->result_array();
        }
        $query = $this->db->get_where('country', array('country_id' => $slug));
        return $query->row_array();
    }
    public function get_owner_country($slug = FALSE)
    {
        if ($slug === FALSE)
       {
           
           $query = $this->db->get('country');
           return $query->result_array();
        }
        $query = $this->db->get_where('country', array('country_id' => $slug));
        return $query->row_array();
    }
     public function get_burial_type_records($slug = FALSE)
    {

        if ($slug === FALSE)
        {
            $query = $this->db->get('burial_type');
            return $query->result_array();
        }
        $query = $this->db->get_where('burial_type', array('type_id' => $slug));
        return $query->row_array();
    }

    public function add_burial_type_records()
    {
        $this->load->helper('url');

        $data = array(

            'type_name' => $this->input->post('type_name')
           
                 
        );
        return $this->db->insert('burial_type', $data);
    }

    public function update_burial_type_records()
    {
        $this->load->helper('url');

        $data = array(

            'type_name' => $this->input->post('type_name')          
        );
        $this->db->where('type_id', $this->input->post('type_id'));
        return $this->db->update('burial_type', $data);      
    }

    public function get_garden_records($slug = FALSE)
    {

        if ($slug === FALSE)
        {
            $query = $this->db->get('garden');
            return $query->result_array();
        }
        $query = $this->db->get_where('garden', array('garden_id' => $slug));
        return $query->row_array();

    }

    public function add_garden_records()
    {
       $this->load->helper('url');

        $data = array(

            'garden_name' => $this->input->post('garden_name'),
            'garden_lat1' => $this->input->post('garden_lat1'),
            'garden_long1' => $this->input->post('garden_long1'),
            'garden_lat2' => $this->input->post('garden_lat2'),
            'garden_long2' => $this->input->post('garden_long2'),
            'garden_lat3' => $this->input->post('garden_lat3'),
            'garden_long3' => $this->input->post('garden_long3'),
            'garden_lat4' => $this->input->post('garden_lat4'),
            'garden_long4' => $this->input->post('garden_long4'),
            'garden_lat5' => $this->input->post('garden_lat5'),
            'garden_long5' => $this->input->post('garden_long5'),
            'garden_lat6' => $this->input->post('garden_lat6'),
            'garden_long6' => $this->input->post('garden_long6'),
            'garden_lat7' => $this->input->post('garden_lat7'),
            'garden_long7' => $this->input->post('garden_long7'),
            'garden_lat8' => $this->input->post('garden_lat8'),
            'garden_long8' => $this->input->post('garden_long8'),
            'garden_lat9' => $this->input->post('garden_lat9'),
            'garden_long9' => $this->input->post('garden_long9'),
            'garden_lat10' => $this->input->post('garden_lat10'),
            'garden_long10' => $this->input->post('garden_long10'),
            'garden_lat11' => $this->input->post('garden_lat11'),
            'garden_long11' => $this->input->post('garden_long11'),
            'garden_lat12' => $this->input->post('garden_lat12'),
            'garden_long12' => $this->input->post('garden_long12'),
            'garden_lat13' => $this->input->post('garden_lat13'),
            'garden_long13' => $this->input->post('garden_long13'),
            'garden_lat14' => $this->input->post('garden_lat14'),
            'garden_long14' => $this->input->post('garden_long14'),
            'garden_lat15' => $this->input->post('garden_lat15'),
            'garden_long15' => $this->input->post('garden_long15'),
            'garden_lat16' => $this->input->post('garden_lat16'),
            'garden_long16' => $this->input->post('garden_long16')
                 
        );
         return $this->db->insert('garden', $data);
    }

    public function update_garden_records()
    {
       $this->load->helper('url');

        $data = array(

           
            'garden_name' => $this->input->post('garden_name'),
            'garden_lat1' => $this->input->post('garden_lat1'),
            'garden_long1' => $this->input->post('garden_long1'),
            'garden_lat2' => $this->input->post('garden_lat2'),
            'garden_long2' => $this->input->post('garden_long2'),
            'garden_lat3' => $this->input->post('garden_lat3'),
            'garden_long3' => $this->input->post('garden_long3'),
            'garden_lat4' => $this->input->post('garden_lat4'),
            'garden_long4' => $this->input->post('garden_long4'),
            'garden_lat5' => $this->input->post('garden_lat5'),
            'garden_long5' => $this->input->post('garden_long5'),
            'garden_lat6' => $this->input->post('garden_lat6'),
            'garden_long6' => $this->input->post('garden_long6'),
            'garden_lat7' => $this->input->post('garden_lat7'),
            'garden_long7' => $this->input->post('garden_long7'),
            'garden_lat8' => $this->input->post('garden_lat8'),
            'garden_long8' => $this->input->post('garden_long8'),
            'garden_lat9' => $this->input->post('garden_lat9'),
            'garden_long9' => $this->input->post('garden_long9'),
            'garden_lat10' => $this->input->post('garden_lat10'),
            'garden_long10' => $this->input->post('garden_long10'),
            'garden_lat11' => $this->input->post('garden_lat11'),
            'garden_long11' => $this->input->post('garden_long11'),
            'garden_lat12' => $this->input->post('garden_lat12'),
            'garden_long12' => $this->input->post('garden_long12'),
            'garden_lat13' => $this->input->post('garden_lat13'),
            'garden_long13' => $this->input->post('garden_long13'),
            'garden_lat14' => $this->input->post('garden_lat14'),
            'garden_long14' => $this->input->post('garden_long14'),
            'garden_lat15' => $this->input->post('garden_lat15'),
            'garden_long15' => $this->input->post('garden_long15'),
            'garden_lat16' => $this->input->post('garden_lat16'),
            'garden_long16' => $this->input->post('garden_long16')
                 
        );
        $this->db->where('garden_id', $this->input->post('garden_id'));
        return $this->db->update('garden', $data);
    }

    public function get_block_records($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $this->db->join('garden', 'block.garden_id = garden.garden_id');
            $query = $this->db->get('block');
            return $query->result_array();
        }

        $this->db->select('*');
        $this->db->from('block');
        $this->db->join('garden', 'block.garden_id = garden.garden_id');
        $this->db->where('block_id',$slug);

        $query_result =  $this->db->get()->row_array();
        return $query_result;
    }

    public function add_block_records()
    {

        $this->load->helper('url');

        $data = array(

            'block_name' => $this->input->post('block_name'),
            'block_lat1' => $this->input->post('block_lat1'),
            'block_long1' => $this->input->post('block_long1'),
            'block_lat2' => $this->input->post('block_lat2'),
            'block_long2' => $this->input->post('block_long2'),
            'block_lat3' => $this->input->post('block_lat3'),
            'block_long3' => $this->input->post('block_long3'),
            'block_lat4' => $this->input->post('block_lat4'),
            'block_long4' => $this->input->post('block_long4'),
            'garden_id' => $this->input->post('garden_id')
                 
        );
        return $this->db->insert('block', $data);
    }

    public function update_block_records()
    {
       $this->load->helper('url');

        $data = array(

            'block_name' => $this->input->post('block_name'),
            'block_lat1' => $this->input->post('block_lat1'),
            'block_long1' => $this->input->post('block_long1'),
            'block_lat2' => $this->input->post('block_lat2'),
            'block_long2' => $this->input->post('block_long2'),
            'block_lat3' => $this->input->post('block_lat3'),
            'block_long3' => $this->input->post('block_long3'),
            'block_lat4' => $this->input->post('block_lat4'),
            'block_long4' => $this->input->post('block_long4'),
            'garden_id' => $this->input->post('garden_id')
                 
        );
        $this->db->where('block_id', $this->input->post('block_id'));
        return $this->db->update('block', $data);
    }

    public function get_lot_records($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $this->db->select('lot.*,burial_type.*,block.*,garden.*,owner_lot.owner_lot_id');
            $this->db->join('owner_lot', 'owner_lot.lot_id = lot.lot_id', 'left');
            $this->db->join('burial_type', 'lot.type_id = burial_type.type_id', 'left');
            $this->db->join('block', 'lot.block_id = block.block_id', 'left');
            $this->db->join('garden', 'block.garden_id = garden.garden_id', 'left');
            $query = $this->db->get('lot');
            return $query->result_array();
        }

        $this->db->select('*');
        $this->db->from('lot');
        $this->db->join('burial_type', 'lot.type_id = burial_type.type_id');
        $this->db->join('block', 'lot.block_id = block.block_id');
        $this->db->where('lot_id',$slug);

        $query_result =  $this->db->get()->row_array();
        return $query_result;
    }

    public function add_lot_records()
    {
        $this->load->helper('url');

        $data = array(

            'lot_name' => $this->input->post('lot_name'),
            'lot_lat' => $this->input->post('lot_lat'),
            'lot_long' => $this->input->post('lot_long'),
            'lot_coordinates' => $this->input->post('lot_coordinates'),
            'block_id' => $this->input->post('block_id'),
            'type_id' => $this->input->post('type_id')
                 
        );
        return $this->db->insert('lot', $data);
    }

    public function update_lot_records()
    {
       $this->load->helper('url');

        $data = array(

            'lot_name' => $this->input->post('lot_name'),
            'lot_lat' => $this->input->post('lot_lat'),
            'lot_long' => $this->input->post('lot_long'),
            'lot_coordinates' => $this->input->post('lot_coordinates'),
            'block_id' => $this->input->post('block_id'),
            'type_id' => $this->input->post('type_id')     
        );
        $this->db->where('lot_id', $this->input->post('lot_id'));
        return $this->db->update('lot', $data);
    }
    public function add_ownership_records()
    {
        
        $tbl1= array(

            'owner_email' => $this->input->post('owner_email'),
            'owner_contactno' => $this->input->post('owner_contactno'),
            'owner_firstname' => $this->input->post('owner_firstname'),
            'owner_middlename' => $this->input->post('owner_middlename'),
            'owner_lastname' => $this->input->post('owner_lastname'),
            'owner_street&brgy' => $this->input->post('owner_street&brgy'),
            'owner_city/municipality' => $this->input->post('owner_city/municipality'),
            'owner_province' => $this->input->post('owner_province'),
            'owner_gender' => $this->input->post('owner_gender'),
            'country_id' => $this->input->post('country_id')
                   
        );
        $this->db->insert('owner', $tbl1);
        $id = $this->db->insert_id();

        $tbl2 = array(
            'lot_id' => $this->input->post('lot_id'),
            'owner_id' => $id,
            'date_avail' => $this->input->post('date_avail'),
            'user_id' => $this->session->userdata('id')
        );

        $this->db->insert('owner_lot', $tbl2);
        return $true;
    }

    public function get_owner_lot_record($slug = FALSE)
    {

        if ($slug === FALSE)
        {
            $this->db->join('owner', 'owner_lot.owner_id = owner.owner_id');
            $this->db->join('lot', 'owner_lot.lot_id = lot.lot_id');
            $this->db->join('block', 'lot.block_id = block.block_id');
            $this->db->join('burial_type', 'lot.type_id = burial_type.type_id');
            $this->db->join('garden', 'block.garden_id = garden.garden_id');
            $this->db->group_by('owner_lot.lot_id');
            $query = $this->db->get('owner_lot');
            return $query->result_array();
        }

        $this->db->select('*');
        $this->db->from('owner_lot');
        $this->db->join('owner', 'owner_lot.owner_id = owner.owner_id');
        $this->db->join('lot', 'owner_lot.lot_id = lot.lot_id');
        $this->db->join('country', 'owner.country_id = country.country_id');
        $this->db->join('block', 'lot.block_id = block.block_id');
        $this->db->join('burial_type', 'lot.type_id = burial_type.type_id');
        $this->db->join('garden', 'block.garden_id = garden.garden_id');
        
        $this->db->where('owner_lot_id', $slug);

        $query_result =  $this->db->get()->row_array();
        return $query_result;
    }

    public function add_deceased_records($owner_id, $lot_id)
    {
        
        $tbl1= array(
             /*'occupant_id' => $id,*/
            'date_avail' => $this->input->post('date_avail'), 
            'lot_id' => $lot_id,
            'owner_id' => $owner_id,
            'user_id' => $this->session->userdata('id')
        );

        $this->db->insert('owner_lot', $tbl1);
        $id = $this->db->insert_id();

        $tbl2 = array( 
            'occupant_firstname' => $this->input->post('occupant_firstname'),
            'occupant_middlename' => $this->input->post('occupant_middlename'),
            'occupant_lastname' => $this->input->post('occupant_lastname'),
            'occupant_gender' => $this->input->post('occupant_gender'),
            'occupant_dateofbirth' => $this->input->post('occupant_dateofbirth'),
            'occupant_dateofdeath' => $this->input->post('occupant_dateofdeath'),
            'occupant_birthplace' => $this->input->post('occupant_birthplace'),
            'occupant_deathplace' => $this->input->post('occupant_deathplace'),
            'occupant_causeofdeath' => $this->input->post('occupant_causeofdeath'),
            'birth_country_id' => $this->input->post('country_id'),
            'death_country_id' => $this->input->post('countries_id'),
            'owner_lot_id' => $id
        );

    
         $this->db->insert('occupant', $tbl2);

        return $true;
    }
    public function get_deceased_lot_record($slug = FALSE)
    {

        if ($slug === FALSE)
        {
            $this->db->join('occupant', 'owner_lot.owner_lot_id = occupant.owner_lot_id');
            $this->db->join('owner', 'owner_lot.owner_id = owner.owner_id');
            $this->db->join('lot', 'owner_lot.lot_id = lot.lot_id');
            $this->db->join('block', 'lot.block_id = block.block_id');
            $this->db->join('burial_type', 'lot.type_id = burial_type.type_id');
            $this->db->join('garden', 'block.garden_id = garden.garden_id');
            $query = $this->db->get('owner_lot');
            return $query->result_array();
        }

        $this->db->select('*');
        $this->db->from('owner_lot');
        $this->db->join('occupant', 'owner_lot.owner_lot_id = occupant.owner_lot_id');
        $this->db->join('owner', 'owner_lot.owner_id = owner.owner_id');
        $this->db->join('lot', 'owner_lot.lot_id = lot.lot_id');
        $this->db->join('block', 'lot.block_id = block.block_id');
        $this->db->join('burial_type', 'lot.type_id = burial_type.type_id');
        $this->db->join('garden', 'block.garden_id = garden.garden_id');
        
        $this->db->where('owner_lot.lot_id', $slug);

        $query_result =  $this->db->get()->result_array();
        return $query_result;
    }
    public function get_owner_lot_records($slug = FALSE)
    {

        if ($slug === FALSE)
        {
            $this->db->join('occupant', 'owner_lot.owner_lot_id = occupant.owner_lot_id');
            $this->db->join('country', 'owner.country_id = country.country_id');
            $this->db->join('country bc', 'occupant.birth_country_id = country.country_id', 'left');
            $this->db->join('country dc', 'occupant.death_country_id = country.country_id', 'left');
            $this->db->join('owner', 'owner_lot.owner_id = owner.owner_id');
            $this->db->join('lot', 'owner_lot.lot_id = lot.lot_id');
            $this->db->join('block', 'lot.block_id = block.block_id');
            $this->db->join('burial_type', 'lot.type_id = burial_type.type_id');
            $this->db->join('garden', 'block.garden_id = garden.garden_id');
            $query = $this->db->get('owner_lot');
            return $query->result_array();
        }

        $this->db->select('*, bc.occupant_country as bcoun, dc.occupant_country as dcoun');
        $this->db->from('owner_lot');
        $this->db->join('occupant', 'owner_lot.owner_lot_id = occupant.owner_lot_id', 'left');
        $this->db->join('owner', 'owner_lot.owner_id = owner.owner_id', 'left');
        $this->db->join('lot', 'owner_lot.lot_id = lot.lot_id', 'left');
        $this->db->join('country bc', 'occupant.birth_country_id = bc.country_id', 'left');
        $this->db->join('country dc', 'occupant.death_country_id = dc.country_id', 'left');
        $this->db->join('block', 'lot.block_id = block.block_id', 'left');
        $this->db->join('burial_type', 'lot.type_id = burial_type.type_id', 'left');
        $this->db->join('garden', 'block.garden_id = garden.garden_id', 'left');
        
        $this->db->where('occupant_id', $slug);

        $query_result =  $this->db->get()->row_array();
        // print json_encode($query_result);
        return $query_result;
    }

    public function add_deceased_owner()
    {
        $tbl2= array(
             'owner_email' => $this->input->post('owner_email'),
            'owner_contactno' => $this->input->post('owner_contactno'),
            'owner_firstname' => $this->input->post('owner_firstname'),
            'owner_middlename' => $this->input->post('owner_middlename'),
            'owner_lastname' => $this->input->post('owner_lastname'),
            'owner_street&brgy' => $this->input->post('owner_street&brgy'),
            'owner_city/municipality' => $this->input->post('owner_city/municipality'),
            'owner_province' => $this->input->post('owner_province'),
            'owner_gender' => $this->input->post('owner_gender'),
            'country_id' => $this->input->post('country_id')
        );

        $this->db->insert('owner', $tbl2);
        $oid = $this->db->insert_id();

         $tbl3 = array(
            'lot_id' => $this->input->post('lot_id'),
            'owner_id' => $oid,
            'date_avail' => $this->input->post('date_avail'),
            'user_id' => $this->session->userdata('id')
        );

        $this->db->insert('owner_lot', $tbl3);
         $id = $this->db->insert_id();
        
        $tbl1= array(
            'occupant_firstname' => $this->input->post('occupant_firstname'),
            'occupant_middlename' => $this->input->post('occupant_middlename'),
            'occupant_lastname' => $this->input->post('occupant_lastname'),
            'occupant_gender' => $this->input->post('occupant_gender'),
            'occupant_dateofbirth' => $this->input->post('occupant_dateofbirth'),
            'occupant_dateofdeath' => $this->input->post('occupant_dateofdeath'),
            'occupant_birthplace' => $this->input->post('occupant_birthplace'),
            'occupant_deathplace' => $this->input->post('occupant_deathplace'),
            'occupant_causeofdeath' => $this->input->post('occupant_causeofdeath'),
            'birth_country_id' => $this->input->post('country_id'),
            'death_country_id' => $this->input->post('countries_id'),
            'owner_lot_id' => $id
        );
        $this->db->insert('occupant', $tbl1);
  
        return $true;
    }

    public function get_lot_lists()
    {
        $this->db->select();
        $this->db->from('lot');
        $this->db->join('owner_lot', 'owner_lot.lot_id = lot.lot_id', 'left' );
        $this->db->join('owner', 'owner_lot.owner_id = owner.owner_id', 'left');
        $this->db->group_by('lot.lot_id');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_curr_owner_lot($owner_id, $lot_id)
    {
        $this->db->select('*');
        $this->db->from('owner_lot');
        $this->db->order_by('owner_lot_id', 'DESC');
        $this->db->where('owner_id', $owner_id);
        $this->db->where('lot_id', $lot_id);
        return $this->db->get()->row_array();

    }
    // public function get_dec_records($slug = FALSE) 
    // {
    //     if ($slug === FALSE)
    //     {
    //         $query = $this->db->get('user_account');
    //         return $query->result_array();
    //     }
    //     $query = $this->db->get_where('user_account', array('user_id' => $slug));
    //       return $query->row_array();/

    //     $this->db->select('occupant_id, occupant_firstname, occupant_middlename, occupant_lastname, occupant_gender, occupant_dateofdeath, occupant_dateofbirth');
    //     $this->db->from('occupant');
    //     $this->db->where('occupant_id',$slug);

    //     $query_result =  $this->db->get()->row_array();
    //     return $query_result;
    // }
    // public function update_dec_records() 
    // {
    //    $this->load->helper('url');

    //     $data = array(

    //         'occupant_id' => $this->input->post('occupant_id'),
    //         'occupant_firstname' => $this->input->post('occupant_firstname'),
    //         'occupant_middlename' => $this->input->post('occupant_middlename'),
    //         'occupant_lastname' => $this->input->post('occupant_lastname'),
    //         'occupant_gender' => $this->input->post('occupant_gender'),
    //         'occupant_dateofbirth' => $this->input->post('occupant_dateofbirth'),
    //         'occupant_dateofdeath' => $this->input->post('occupant_dateofdeath')
                         
    //     );

    //     $this->db->where('occupant_id', $this->input->post('occupant_id'));
    //    return $this->db->update('occupant', $data);
    // }
}

	