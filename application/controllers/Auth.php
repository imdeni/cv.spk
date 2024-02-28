<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('LoginModel');
  }
  public function index(){
    if($this->session->userdata('authenticated')) {
    echo "<script>alert('Akun masih terhubung, Selamat datang!');
          window.location.href='index.php/auth/sukses';
          </script>";

    }else if($this->session->userdata('authenticated1')) {
    echo "<script>alert('Akun masih terhubung, Selamat datang!');
          window.location.href='auth/user';
          </script>";
        }
        
    $this->load->view('form_login');
  }

  public function login(){
    $username = $this->input->post('username'); 
    $password = ($this->input->post('password')); 
    $users=2;
    $admin=1;
    $user = $this->LoginModel->get($username); 
    if(empty($user)){ 
      echo "<script>alert('NIK dan KK belum terdaftar!');
            window.location.href='reload';
            </script>";
    }else{
      if($password == $user->password and $username==$user->username){ 
        if ($users==$user->stts){
        $session1 = array(
          'authenticated2'=>true, 
          'username'=>$user->username, 
          'nama'=>$user->nama, 
          'alamat'=>$user->alamat, 
          'password'=>$user->password, 
          'status' => "login"
        );

        $this->session->set_userdata($session1); 

        echo "<script>alert('Berhasil login, Selamat datang user!');
              window.location.href='user';
              </script>";

      }else{
        echo "<script>alert('NIK atau KK salah!');
              window.location.href='reload';
              </script>";
      }
        }else{
        echo "<script>alert('NIK atau KK salah!');
              window.location.href='reload';
              </script>";
      }
    }
  }
  public function loginadmin(){
    $username = $this->input->post('username'); 
    $password = ($this->input->post('password')); 
    $users=2;
    $admin=1;
    $user = $this->LoginModel->get($username); 
    if(empty($user)){ 
      echo "<script>alert('Username dan password tidak di temukan!');
            window.location.href='reloadadmin';
            </script>";
    }else{
      if($password == $user->password and $username==$user->username){ 
        if ($admin==$user->stts){
        $session = array(
          'authenticated'=>true, 
          'username'=>$user->username, 
          'nama'=>$user->nama, 
          'alamat'=>$user->alamat, 
          'password'=>$user->password, 
          'status' => "login"
        );

        $this->session->set_userdata($session); 

        echo "<script>alert('Berhasil login, Selamat datang admin!');
              window.location.href='sukses';
              </script>";

      }else{
        echo "<script>alert('Username atau Password salah!');
              window.location.href='reloadadmin';
              </script>";
      }
        }else{
        echo "<script>alert('Username atau Password salah!');
              window.location.href='reloadadmin';
              </script>";
      }
    }
  }
  function reload(){
    redirect(base_url("index.php/auth"));
  }
  function reloadadmin(){
    redirect(base_url("index.php/Admin/login"));
  }
  function sukses(){
    redirect(base_url("index.php/Admin/baru"));  
  }
  function user(){
    redirect(base_url("index.php/userbaru"));  
  }
  function logout2(){
    redirect(base_url("index.php/auth"));  
  }
  public function logout(){
    $this->session->sess_destroy();
    echo "<script>alert('Berhasil logout!');
              window.location.href='logout2';
              </script>";
  }
}








