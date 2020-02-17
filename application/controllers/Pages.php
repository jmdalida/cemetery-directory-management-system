<?php
class Pages extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('superadmin_model');
        $this->load->helper('url_helper');
    }

    public function view($page = 'home')
    {
        $this->load->helper('url');
        $this->load->library('googlemaps');

        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }
        
        $config['center'] = '8.222570, 124.256778';
        $config['zoom'] = '16';
        $this->googlemaps->initialize($config);

        $data['map'] = $this->googlemaps->create_map();
        $this->load->view('user_templates/header', $data );
        $this->load->view('user_templates/body', $data );
        $this->load->view('pages/'.$page, $data);
        $this->load->view('user_templates/footer');
    }

    public function burial_search()
    {
        $this->load->view('user_templates/header' );
        $this->load->view('user_templates/body' );
        $this->load->view('pages/burial_search');
        
    }

     public function map_tour()
    {
        $this->load->view('user_templates/header' );
        $this->load->view('user_templates/body' );
        $this->load->view('pages/map_tour');
    }


    public function map_lots($status = 'all')
    {
        
        $sql = "SELECT A.lot_id,
                C.garden_name,
                B.block_name,
                A.lot_name,
                D.type_name,
                A.lot_lat,
                A.lot_long,
                G.occupant_id,
                E.owner_id,
                E.date_transfered,
                CASE 
                WHEN IFNULL(E.owner_id,0) = 0 THEN 'red'
                WHEN IFNULL(G.occupant_id,0) != 0 AND IFNULL(E.date_transfered,0) = 0 THEN '#6cff00'
                ELSE 'yellow'
                END AS color_status
            FROM LOT A
            INNER JOIN block B ON B.block_id = A.block_id
            INNER JOIN garden C ON C.garden_id = B.garden_id
            INNER JOIN burial_type D ON D.type_id = A.type_id
            LEFT JOIN (
                        SELECT * FROM owner_lot ol1 
                        WHERE ol1.owner_lot_id = (
                                                    SELECT MAX(ol2.owner_lot_id) as owner_lot_id 
                                                    FROM owner_lot ol2 
                                                    WHERE ol2.lot_id=ol1.lot_id
                                                 )
                      ) E ON E.lot_id = A.lot_id
            LEFT JOIN occupant G ON G.owner_lot_id = E.owner_lot_id
        ";

        if ($status == 'available') {
             $sql .= "
                WHERE IFNULL(E.owner_id,0) = 0
                GROUP BY A.lot_id
            ";
        } else if ($status == 'reserved') {
            $sql .= "
                WHERE IFNULL(E.owner_id,0) != 0
                AND IFNULL(G.occupant_id,0) = 0
                OR (IFNULL(G.occupant_id,0) != 0 && IFNULL(E.date_transfered,0)!=0)
                GROUP BY A.lot_id
            ";
        } else if ($status == 'occupied'){
            $sql .= "
                WHERE IFNULL(G.occupant_id,0) != 0
                AND IFNULL(E.date_transfered,0) = 0
                GROUP BY A.lot_id
            ";
            
        }
        
        $data = $this->db->query($sql)->result();
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


    public function search_burial($fname  = null,$lname = null)
    {
        $firstname = str_replace('%20', ' ', $fname);
        $lastname = str_replace('%20', ' ', $lname);
        
        $this->db->select('*');
        $this->db->from('owner_lot');
        $this->db->join('lot', 'owner_lot.lot_id = lot.lot_id');
        $this->db->join('block', 'lot.block_id = block.block_id');
        $this->db->join('garden', 'block.garden_id = garden.garden_id');
        $this->db->join('occupant', 'owner_lot.owner_lot_id = occupant.owner_lot_id');
        $this->db->where('owner_lot.date_transfered', NULL);
        $this->db->where('occupant.occupant_firstname',$firstname);
        $this->db->where('occupant.occupant_lastname',$lastname);

        $data = $this->db->get()->row();
        echo json_encode($data);
        //return $data  ;
    }

    public function lot_status()
    {
        $this->load->view('user_templates/header' );
        $this->load->view('user_templates/body') ;
        $this->load->view('pages/lot_status');
    }

    public function developers()
    {
        $this->load->view('user_templates/header');
        $this->load->view('user_templates/body');
        $this->load->view('pages/developers');
        $this->load->view('user_templates/footer');
    }

}