<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_user extends CI_Model {

function read_user(){

    $query=$this->db->get('users');
    return $query->result();
}
    function add_user($data){


        $this->db->insert('users',$data);

    }















   /* var $table = 'users';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }


    // Save a new user.
    function save( $user_data ) {
        $this->db->insert($this->table , $user_data);
        return $this->db->insert_id();
    }

    // Update an existing user
    /*
    function update( $user_data ) {
        if (isset($user_data['id'])) {
            $this->db->where('id', $user_data['id'] );
            $this->db->update( $this->table , $user_data);
            return $this->db->affected_rows();
        }
        return false;
    }

    // get user by username
    function get_by_username( $username ) {
        $query = $this->db->get_where($this->table, array('username' => $username), 1);
        if( $query->num_rows() > 0 ) return $query->row_array();
        return false;
    }

    // set login session
    function allow_pass( $user_data ) {
        $this->session->set_userdata( array( 'last_activity' => time(), 'logged_in' => 'yes', 'user' => $user_data ) );
    }

    // Check if user is logged in and update session
    function is_logged_in() {
        $last_activity = $this->session->userdata('last_activity');
        $logged_in = $this->session->userdata('logged_in');
        $user = $this->session->userdata('user');

        if ( ($logged_in == 'yes')
            && ((time() - $last_activity) < $this->max_idle_time )) {
            $this->allow_pass( $user );
            return true;
        } else {
            $this->remove_pass();
            return false;
        }
    }

    // remove pass
    function remove_pass() {
        $array_items = array('last_activity' => '', 'logged_in' => '', 'user' => '');
        $this->session->unset_userdata($array_items);
    }

    // get user by id
    function get_by_id( $id ) {
        $query = $this->db->get_where($this->table, array('id' => $id), 1);
        if( $query->num_rows() > 0 ) return $query->row_array();
        return false;
    }
*/







}
