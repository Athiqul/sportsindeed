<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class Tips_prediction_uploader extends CI_Model {

    // Construction Function
    public function __construct() {
        parent::__construct();
    }

    #--------------------------------------
    #      To save Ad Info
    #--------------------------------------
    public function save_ad_info($data) {
        $this->db->insert('tips_and_prediction', $data);
    }

    public function get_tip_predictions() {
        $this->db->select('*');
        $this->db->from('tips_and_prediction');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function get_tip_predictions_by_id($id) {
        $this->db->select('*');
        $this->db->from('tips_and_prediction');
        $this->db->where('id', $id);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function update_tips_prediction($data,$id) {
        $this->db->where('id', $id);
        $this->db->update('tips_and_prediction', $data);
    }
    

}

