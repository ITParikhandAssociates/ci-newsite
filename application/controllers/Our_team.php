<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Our_team extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('upload');  // Load the upload library
    }

    public function some_function() {
        // Your code where $this->upload is used
        if ($this->upload->do_upload('your_field_name')) {
            // Upload success logic
        } else {
            $error = $this->upload->display_errors();
            // Handle error
        }
    }

    public function member_view() {
        $this->load->model('Our_Team_Model');
        $data['our_team_view'] = $this->Our_Team_Model->get_team_data();
        // print_r($data);exit;
        $team_data = $this->Our_Team_Model->get_team_data();
        $this->session->set_userdata('our_team', $team_data);
        $this->load->view('admin_include/admin_header');
        $this->load->view('admin_include/admin_menu_bar');
        $this->load->view('admin_view/member_view', $data);
        $this->load->view('admin_include/admin_footer');
    }

    public function new_member() {
        $this->load->view('admin_include/admin_header');
        $this->load->view('admin_include/admin_menu_bar');
        $this->load->view('admin_view/add_new_member');
        $this->load->view('admin_include/admin_footer');
    }

    public function add_new_member() {
        if (isset($_FILES['image']['name'])) {
            $config['upload_path'] = './our_team/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $this->load->library('upload', $config);
        }
        if (!$this->upload->do_upload('image')) {
            echo '<script>alert("Please Select Valid Image...");</script>';
            redirect('our_team/new_member', 'refresh');
        } else {
            $data = $this->upload->data();
            $config['image_library'] = 'gd2';
            $config['source_image'] = './our_team/' . $data["file_name"];
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = FALSE;
            $config['quality'] = '60%';
            $config['width'] = 760;
            $config['height'] = 717;
            $config['new_image'] = './our_team/' . $data["file_name"];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            $data1 = array(
                'on_screen' => $this->input->post('on_screen'),
                'name_team' => $this->input->post('member_name'),
                'mobile' => $this->input->post('mobile'),
                'email_id' => $this->input->post('email'),
                'designetion' => $this->input->post('designetion'),
                'short_description' => $this->input->post('short_description'),
                'description' => $this->input->post('description'),
                'profile_img' => $data["file_name"],
                'fac_url' => $this->input->post('fac_url'),
                'twitr_url' => $this->input->post('twitr_url'),
                'insta_url' => $this->input->post('insta_url'),
                'linked_url' => $this->input->post('linked_url')
            );

            $this->load->model('Our_Team_Model');
            $this->Our_Team_Model->add_new_member($data1);
            echo '<script>alert("Data Are Successfully Inserted...");</script>';
            redirect('our_team/member_view', 'refresh');
        }
    }

    public function update_profile($id) {
        $data = $this->session->userdata('our_team');
        $d1 = $data[$id-1];
        $d2 = $d1->profile_id;
        $this->load->model('Our_Team_Model');
        $data['profile_vew'] = $this->Our_Team_Model->get_profile($d2);
        $this->load->view('admin_include/admin_header');
        $this->load->view('admin_include/admin_menu_bar');
        $this->load->view('admin_view/update_member', $data);
        $this->load->view('admin_include/admin_footer');
    }

    public function update_member_profile() {
        $this->load->model('Our_Team_Model');
        $id = $this->input->post('profile');
        $old_img = $this->input->post('old_img');
        $config['upload_path'] = './our_team/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        if ($this->input->post('upload') != NULL) {
            if (!empty($_FILES['image']['name'])) {
                $config['upload_path'] = './our_team/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['file_name'] = $_FILES['image']['name'];
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image')) {
                    $data = $this->upload->data();
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './our_team/' . $data["file_name"];
                    $config['create_thumb'] = FALSE;
                    $config['maintain_ratio'] = FALSE;
                    $config['quality'] = '60%';
                    $config['new_image'] = './our_team/' . $data["file_name"];
                    $this->load->library('image_lib', $config);
                    // $this->image_lib->resize();

                    $data1 = array(
                        'on_screen' => $this->input->post('on_screen'),
                        'name_team' => $this->input->post('member_name'),
                        'mobile' => $this->input->post('mobile'),
                        'email_id' => $this->input->post('email'),
                        'designetion' => $this->input->post('designetion'),
                        'short_description' => $this->input->post('short_description'),
                        'description' => $this->input->post('description'),
                        'profile_img' => $data["file_name"],
                        'fac_url' => $this->input->post('fac_url'),
                        'twitr_url' => $this->input->post('twitr_url'),
                        'insta_url' => $this->input->post('insta_url'),
                        'linked_url' => $this->input->post('linked_url')
                    );

                    $this->Our_Team_Model->upload_new_image($id, $data1);
                    echo "<script>alert('Data Are Updated');</script>";
                    redirect('our_team/member_view', 'refresh');
                } else {
                    echo "<script>alert('Please Select Valid Image');</script>";
                    redirect('our_team/member_view', 'refresh');
                }
            } else {
                $data1 = array(
                    'on_screen' => $this->input->post('on_screen'),
                    'name_team' => $this->input->post('member_name'),
                    'mobile' => $this->input->post('mobile'),
                    'email_id' => $this->input->post('email'),
                    'designetion' => $this->input->post('designetion'),
                    'short_description' => $this->input->post('short_description'),
                    'description' => $this->input->post('description'),
                    'profile_img' => $old_img,
                    'fac_url' => $this->input->post('fac_url'),
                    'twitr_url' => $this->input->post('twitr_url'),
                    'insta_url' => $this->input->post('insta_url'),
                    'linked_url' => $this->input->post('linked_url')
                );
                $this->Our_Team_Model->upload_old_image($id, $data1);
                echo "<script>alert('Data Are Updated With Old Image');</script>";
                redirect('our_team/member_view', 'refresh');
            }
        } else {
            echo "<script>alert('please fill valid detail');</script>";
            redirect('our_team/new_member', 'refresh');
        }
    }

    public function delete_profile($id) {
        $data = $this->session->userdata('our_team');
        $d1 = $data[$id-1];
        $d2 = $d1->profile_id;
        $this->load->model('Our_Team_Model');
        $this->Our_Team_Model->delete_profile($d2);
        echo "<script>alert('Data Are Deleted');</script>";
        redirect('our_team/member_view', 'refresh');
    }
}
?>
