<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model("User");
  }
  public function index()
  {
    $data["users"] = $this->User->all();
    $this->load->view("users/index", $data);
  }
  public function show($id)
  {
    $data["user"] = $this->User->find($id);
    $this->load->view("users/show", $data);
  }
  public function new_user()
  {
  }
  public function create()
  {
  }
  public function edit($id)
  {
  }
  public function update($id)
  {
    $params = $this->input->post(NULL, TRUE);
    $this->User->save($id, $params);
    redirect("/users/show/" . $id);
  }
  public function destroy($id)
  {
    $this->User->destroy($id);
    redirect("/");
  }
}
