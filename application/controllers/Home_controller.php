<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Home Controller
 *
 * @author BDTASK <bdtask@gmail.com>
 * 
 * @link http://www.bdtask.com
 */
class Home_controller extends CI_Controller {

    public function __construct() {

        parent::__construct();

        $this->load->model('ads');
        $this->load->model("settings");
        $this->load->model('home_model', 'hm');
        $this->load->model('Pb_function', 'pb');
        $this->load->model('All_cata', 'cata');
        $this->load->model('Common_model', 'cm');
        $this->load->model('Write_setting_model', 'wsm');
        $this->load->model('New_page');
    }


    /***************************************
     * To veiw all home page Data
     ***************************************/

    public function index() {
    
        // $data = $this->hm->home_data();
        // #---------------------
        // # website setting data        
        // $data['home_page_positions'] = $this->wsm->home_category_position();


        // $data['setting']                = $this->db->get('app_settings')->row();
        // $data['meta']                   = json_decode($this->settings->get_previous_settings('settings', 5));
        // $data['social_link']            = json_decode($this->settings->get_previous_settings('settings', 111));
        // $data['social_page']            = json_decode($this->settings->get_previous_settings('settings', 6));
        
        // $data['default_theme'] = $this->wsm->theme_data();
        // $data['lan'] = $this->wsm->lan_data();
        // $default_theme = $data['default_theme'];


        // $data['ln'] = $this->cm->latest_news();
        // $data['bn'] = $this->cm->breaking_news();
        // $data['mr'] = $this->cm->most_read_dbse();
        // $data['pull'] = $this->cm->pulling();

        // $data['login_url'] = $this->googleplus->loginURL();
        // $data['ads']            = $this->ads->SelectAds();
        // $data['Editor']         = $this->hm->home_data('Editor-Choice');

        // $data['main_menu']      = $this->settings->main_menu();
        // $data['cat_menus']      = $this->settings->footer_menu();
        // $data['footer_menu']    = $this->settings->menu_position_3();
        // $data['cat']    = $this->settings->count_post_by_cat();

        // $this->load->view('themes/' . $default_theme . '/header', $data);
        // $this->load->view('themes/' . $default_theme . '/breaking');
        // $this->load->view('themes/' . $default_theme . '/menu');
        // $this->load->view('themes/' . $default_theme . '/home_view');
        // $this->load->view('themes/' . $default_theme . '/footer');
        // $this->output->cache(30); 
       
        $data['latest_random_news'] = $this->db->where('page', 'featured-cricket')
        ->order_by('id', 'desc') 
        ->limit(5)
        ->get('news_mst')
        ->result();

        $data['latest_crickets_news']  = $this->db->where('page', 'cricket')->order_by('id', 'desc')->limit(7)->get('news_mst')->result();

        $data['latest_football_news']  = $this->db->where('page', 'football')->order_by('id', 'desc')->limit(7)->get('news_mst')->result();

        $data['premier_league_news']  = $this->db->where('page', 'premier-league')->order_by('id', 'desc')->limit(5)->get('news_mst')->result();

        $data['kabadi_news']  = $this->db->where('page', 'kabadi')->order_by('id', 'desc')->limit(3)->get('news_mst')->result();

        $data['home_ads']  = $this->db->where('page',1)->get('ad_s')->result();
        //echo '<pre>';
        //print_r($data['latest_random_news']);
        //die();
        $data['base_url'] = base_url();
        $data['web_content'] = $this->load->view('webpage/home', $data, TRUE);
        $this->load->view('webpage/master', $data);
       
    }

    public function tips_and_prediction() {


        $data['all_tips_predictions'] = $this->New_page->get_tip_predictions();
        $data['home_ads']  = $this->db->where('page',1)->get('ad_s')->result();
        //echo "<pre>";print_r($data['home_ads']);die();

        $data['web_content'] = $this->load->view('webpage/tips_and_prediction', $data, TRUE);
        $this->load->view('webpage/master', $data);
    }

    /* ************************************************
    *  Saving Polling Data
    * ************************************************ */

    public function save($question_id=NULL,$vote=NULL) {
        
        $id = $question_id;
        $fill = $vote;

        if ($this->session->userdata('pulled') != 1) {
            
            $query = $this->db->query("SELECT $fill as vote FROM pulling WHERE id=$id");
            $row = $query->row();
            $data_arr = array(
                $fill => $row->vote + 1
            );
            $this->db->where('id', $id);
            $this->db->update('pulling', $data_arr);
            $session_data = array('pulled' => 1);
            $this->session->set_userdata($session_data);
            
            echo '<div class="alert alert-success">'.display('vot_save_msg').'</div>'; exit;

        } else {
            echo '<div class="alert alert-danger">'.display('vot_exist_msg').'</div>'; exit;
        }
    }

    public function profileEdit(){
        if (empty($this->session->userdata('user_id'))) {
            $this->session->set_flashdata('error', 'You are not logged in.');
            redirect('sign-in');
        }
        $data['profile_info'] = $this->hm->get_profile_info($this->session->userdata('user_id'));
        $data['profile_id'] = $this->session->userdata('user_id');
        $data['home_ads']  = $this->db->where('page',1)->get('ad_s')->result();
        //echo "<pre>";print_r($data['profile_info']);die(); 

        $data['web_content'] = $this->load->view('webpage/profile_edit', $data, TRUE);
        $this->load->view('webpage/master', $data);

    }

    public function profile_update($id){
        $first_name = $this->input->post('first_name',TRUE);
        $last_name = $this->input->post('last_name',TRUE);
        $user_name = $this->input->post('user_name',TRUE);
        $email = $this->input->post('email',TRUE);
        $sex = $this->input->post('sex',TRUE);
        $birth_date = $this->input->post('birth_date',TRUE);
        $newsletter = $this->input->post('newsletter',TRUE);
        $fav_sports = $this->input->post('fav_sports',TRUE);
        $cricket_country = $this->input->post('cricket_country',TRUE);
        $ipl_team = $this->input->post('ipl_team',TRUE);
        $premear_league = $this->input->post('premear_league',TRUE);
        $laliga = $this->input->post('laliga',TRUE);
        $kabaddi = $this->input->post('kabaddi',TRUE);
        $term_and_condition = $this->input->post('term_and_condition',TRUE);
      

        $max_file_size = 1*1024 * 1024; // 1MB
        $valid_exts = array('jpeg', 'jpg', 'png', 'gif','webp');
        
        // if ($_FILES['image']['size'] <= $max_file_size) {
            
            $FILES = $_FILES['image'];
            $ext = strtolower(pathinfo($FILES['name'], PATHINFO_EXTENSION));
            
            if (in_array($ext, $valid_exts)) {
                $file_location = $this->logo_upload($FILES);
                
                $data['photo'] = $file_location;
                
                

            }
        // }
        
        $data['name'] = $first_name;
        $data['nick_name'] = $last_name;
        $data['pen_name'] = $user_name;
        $data['sex'] = $sex;
        $data['email'] = $email;
        $data['birth_date'] = $birth_date;
        $data['newsletter'] = $newsletter;
        $data['fav_sports'] = $fav_sports;
        $data['cricket_country'] = $cricket_country;
        $data['ipl_team'] = $ipl_team;
        $data['premear_league'] = $premear_league;
        $data['laliga'] = $laliga;
        $data['kabaddi'] = $kabaddi;
        $data['term_and_condition'] = $term_and_condition;
        
        //echo "<pre>";print_r($data);die();

        $this->db->where('id', $id);
        $this->db->update('user_info', $data);
        
        $this->session->set_flashdata('message', 'Profile Updated successful');
        return redirect('profile-edit');

    }
    
    public function logo_upload($FILES)
	{
		if($FILES){
			$config['upload_path'] = './assets/newDesign/profile/';
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
	
	public function sign_in(){
	    $data['home_ads']  = $this->db->where('page',1)->get('ad_s')->result();
        $data['web_content'] = $this->load->view('webpage/sign_in',$data,TRUE);
        $this->load->view('webpage/master', $data);
	}
	
	public function signInComplete(){
	    $email = $this->input->post('email', TRUE);
        $password = md5($this->input->post('password', TRUE));
        $user = $this->db->where('email', $email)->where('password', $password)->where('user_type',1)->get('user_info')->row();
    
        if ($user) {
              $this->session->set_userdata('user_id', $user->id);
              $this->session->set_flashdata('success_message', 'Login successful!');
              return redirect('/');
        } else {
              $this->session->set_flashdata('error_message', 'Invalid credential');
        }
        return redirect('sign-in');
	}
	
	public function logout() {
      $this->session->sess_destroy();
      redirect('/');
    }

    public function signUp(){
        $data['home_ads']  = $this->db->where('page',1)->get('ad_s')->result();
        $data['web_content'] = $this->load->view('webpage/sign_up',$data,TRUE);
        $this->load->view('webpage/master', $data);
    }
    
    public function signUpComplete(){
        // $this->form_validation->set_rules('first_name', 'First Name', 'required');
        // $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        // $this->form_validation->set_rules('user_name', 'Username', 'required|is_unique[users.username]');
        // $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        // $this->form_validation->set_rules('password', 'Password', 'required');
        // $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
        // $this->form_validation->set_rules('gender', 'Gender', 'required');
        // $this->form_validation->set_rules('date_of_birth', 'Date of Birth', 'required');
       
       
        // if ($this->form_validation->run() == FALSE) {
        //     $this->session->set_flashdata('validate_errors', validation_errors());
        //     redirect('sign-up');
        // } else {
            //$this->session->unset_userdata('validate_errors');
            $user_data = array(
                'name' => $this->input->post('first_name'),
                'nick_name' => $this->input->post('last_name'),
                'pen_name' => $this->input->post('user_name'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')), 
                'sex' => $this->input->post('gender'),
                'birth_date' => $this->input->post('date_of_birth'),
                'newsletter' => $this->input->post('subscribe_newsletter') ? 'yes' : 'no',
                'user_type' => 1
            );
        
           $this->db->insert('user_info', $user_data);
 
            if ($this->db->affected_rows() > 0) {
                $user_id = $this->db->insert_id();
            } else {
                echo 'Failed to insert data into user_info table';die();
            }

            $this->session->set_userdata('user_id', $user_id);
            redirect('/');
        // }
    }
    
    public function newsDetails($category,$title){

        $data['details_news']  = $this->db->where('page', $category)->where('encode_title', $title)->get('news_mst')->row();
        $data['latest_news']  = $this->db->where('page', $category)->order_by('id', 'desc')->limit(5)->get('news_mst')->result();
        $data['home_ads']  = $this->db->where('page',1)->get('ad_s')->result();
        $data['web_content'] = $this->load->view('webpage/news_details',$data,TRUE);
        $this->load->view('webpage/master', $data);
    }
   
   public function cricket(){
       $data['latest_crickets_news']  = $this->db->where('page', 'cricket')->order_by('id', 'desc')->limit(7)->get('news_mst')->result();
       $data['latest_crickets_videos']  = $this->db->where('page', 'cricket')->order_by('id', 'desc')->limit(3)->get('news_mst')->result();
       $data['home_ads']  = $this->db->where('page',1)->get('ad_s')->result();
    //   echo '<pre>';
    //   print_r($data);
    //   die();
       $data['web_content'] = $this->load->view('webpage/cricket_page',$data,TRUE);
       $this->load->view('webpage/master', $data);
   } 
   
   public function football(){
       $data['latest_football_news']  = $this->db->where('page', 'football')->order_by('id', 'desc')->limit(7)->get('news_mst')->result();
       $data['latest_football_videos']  = $this->db->where('page', 'football')->order_by('id', 'desc')->limit(3)->get('news_mst')->result();
       $data['home_ads']  = $this->db->where('page',1)->get('ad_s')->result();
    //       echo '<pre>';
    //   print_r($data['latest_football_videos']);
    //   die();
       $data['web_content'] = $this->load->view('webpage/football_page',$data,TRUE);
       $this->load->view('webpage/master', $data);
   }
}

