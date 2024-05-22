<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @System  : Media controller
 * @author  : BDTASK <bdtask@gmail.com>
 * @link    : http://www.bdtask.com
 */
class TipsPrediction extends MX_Controller {
    
    #---------------------------------
    # Constructor Function
    public $spaceobj;
    public $CI;
    public function __construct() {
        parent::__construct();
        if (! $this->session->userdata('isLogIn'))
            redirect('login');
        $this->load->model('Tips_prediction_uploader');
    }



    #---------------------------------
    # View to upload photo
    public function create_Tips_prediction() {
        $this->permission->check_label('create_Tips_prediction')->create()->redirect();
        
        $data['title'] = display('create_Tips_prediction');
        $data['module'] = "tips_and_prediction"; 
        $data['page']   = "create_Tips_prediction"; 
        echo Modules::run('template/layout', $data);   

    }
    

    // library photo upload
    public function saveTipsPrediction() {
        
        $this->permission->check_label('create_Tips_prediction')->create()->redirect();

            $welcome_bonus = $this->input->post('welcome_bonus',TRUE);
            $win_rate = $this->input->post('win_rate',TRUE);
            $payout = $this->input->post('payout',TRUE);
            $rating = $this->input->post('rating',TRUE);
            $website_url = $this->input->post('website_url',TRUE);
            $color = $this->input->post('color',TRUE);

            // $sizes = array($thumb_w_x => $thumb_h_y, $larg_w_x => $larg_h_y);

            $pst_imge = $_FILES['image']['name'];
            $image_chk = explode(".",$pst_imge);

            $max_file_size = 1*1024 * 1024; // 1MB
            $valid_exts = array('jpeg', 'jpg', 'png', 'gif','webp');

            // echo "<pre>";print_r($_FILES);die();
            if ($_FILES['image']['size'] <= $max_file_size) {

                $FILES = $_FILES['image'];
                $ext = strtolower(pathinfo($FILES['name'], PATHINFO_EXTENSION));
                
                if (in_array($ext, $valid_exts)) {

                    $file_location = $this->logo_upload($FILES);

                    $insertData = array(
                        'logo' => $file_location,
                        'welcome_bonus' => $welcome_bonus,
                        'win_rate'      => $win_rate,
                        'payout'             => $payout,
                        'rating'          => $rating,
                        'website_url'        => $website_url,
                        'color'            => $color,
                    );

                    
                    $this->Tips_prediction_uploader->save_ad_info($insertData);

                    $this->session->set_flashdata('message', 'Saved successful');
                    redirect("tips_and_prediction/TipsPrediction/tips_prediction_list");

                }else{
                    $this->session->set_flashdata('exception','Unsupported file!');
                    redirect('tips_and_prediction/TipsPrediction/tips_prediction_list');
                }
            }else{
                $this->session->set_flashdata('exception','Please upload image smaller than 1MB!');
                redirect('tips_and_prediction/TipsPrediction/tips_prediction_list');
            }

          
    }

    #------------------------------------------------- 
    # end function pb_delete_temp;
    
	public function logo_upload($FILES)
	{
		if($FILES){
			$config['upload_path'] = './assets/newDesign/tipsPrediction/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif|JPG';
			$config['file_name'] = time().$FILES['image']['name'];
			
            //Load upload library and initialize here configuration
			$this->load->library('image_lib',$config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('image')){
				$uploadData = $this->upload->data();
				$image = $uploadData['file_name'];

			}else{
				$image = 'oo';
			}
            return $image;
		}
		
	}
    public function tips_prediction_list() {
       
        $this->permission->check_label('tips_prediction_list')->read()->redirect(); 

        $data['all_tips_prediction'] = $this->Tips_prediction_uploader->get_tip_predictions();

        $data['title'] = display('tips_prediction_list');
        $data['module'] = "tips_and_prediction"; 
        $data['page']   = "tips_prediction_list"; 
        echo Modules::run('template/layout', $data);  

    }


    // update library photo
    public function edit_tips_prediction($id) {
        
        $this->permission->check_label('edit_tips_prediction')->update()->redirect();

        $data['tips_prediction_info'] = $this->Tips_prediction_uploader->get_tip_predictions_by_id($id);

        $data['title'] = display('edit_tips_prediction');
        $data['module'] = "tips_and_prediction"; 
        $data['page']   = "edit_tips_prediction"; 
        echo Modules::run('template/layout', $data); 
    }
    
    public function update_tips_prediction($id) {
        $this->permission->check_label('update_tips_prediction')->update()->redirect();

        // echo $id;die();

        $welcome_bonus = $this->input->post('welcome_bonus',TRUE);
        $win_rate = $this->input->post('win_rate',TRUE);
        $payout = $this->input->post('payout',TRUE);
        $rating = $this->input->post('rating',TRUE);
        $website_url = $this->input->post('website_url',TRUE);
        $color = $this->input->post('color',TRUE);

        // $sizes = array($thumb_w_x => $thumb_h_y, $larg_w_x => $larg_h_y);

        $pst_imge = $_FILES['image']['name'];
        $image_chk = explode(".",$pst_imge);

        $max_file_size = 1*1024 * 1024; // 1MB
        $valid_exts = array('jpeg', 'jpg', 'png', 'gif','webp');


        // echo "<pre>";print_r($_FILES);die();
        if(empty($_FILES['image']['name'])){
            
            $insertData = array(
                'logo' => $this->input->post('pre_logo',TRUE),
                'welcome_bonus' => $welcome_bonus,
                'win_rate'      => $win_rate,
                'payout'        => $payout,
                'rating'        => $rating,
                'website_url'   => $website_url,
                'color'         => $color,
            );
            $this->Tips_prediction_uploader->update_tips_prediction($insertData,$id);
    
            $this->session->set_flashdata('message', 'Updated successful');
            redirect("tips_and_prediction/TipsPrediction/tips_prediction_list");
        }else{
            
            if ($_FILES['image']['size'] <= $max_file_size) {

                $FILES = $_FILES['image'];
                $ext = strtolower(pathinfo($FILES['name'], PATHINFO_EXTENSION));
                
                if (in_array($ext, $valid_exts)) {
    
                    $file_location = $this->logo_upload($FILES);
    
                    $insertData = array(
                        'logo' => $file_location,
                        'welcome_bonus' => $welcome_bonus,
                        'win_rate'      => $win_rate,
                        'payout'             => $payout,
                        'rating'          => $rating,
                        'website_url'        => $website_url,
                        'color'            => $color,
                    );

                    $this->Tips_prediction_uploader->update_tips_prediction($insertData,$id);
    
                    $this->session->set_flashdata('message', 'Updated successful');
                    redirect("tips_and_prediction/TipsPrediction/tips_prediction_list");
    
                }else{
                    $this->session->set_flashdata('exception','Unsupported file!');
                    redirect('tips_and_prediction/TipsPrediction/tips_prediction_list');
                }
            }else{
                $this->session->set_flashdata('exception','Please upload image smaller than 1MB!');
                redirect('tips_and_prediction/TipsPrediction/tips_prediction_list');
            }
        }
        
    }
    

    //delete photo
    public function delete_tips_and_prediction($id) {

        $this->permission->check_label('delete_tips_and_prediction')->delete()->redirect();
        // echo $id;die();
        $data = $this->db->where('id', $id)->get('tips_and_prediction')->row();
        //$link = base_url('assets/newDesign/tipsPrediction/').$data->logo;
        //unlink($link);
        $this->db->where('id', $id)->delete('tips_and_prediction');
        $this->session->set_flashdata('message', display('delete_message'));
        redirect("tips_and_prediction/TipsPrediction/tips_prediction_list");
    }




}