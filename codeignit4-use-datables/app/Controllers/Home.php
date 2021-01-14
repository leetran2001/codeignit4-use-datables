<?php 

namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

 


class Home extends BaseController
{
	
        public function index($page = 'home')
        {

            if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php'))
            {
                 echo "no";
                // Whoops, we don't have a page for that!
                //throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
            }

            $data['title'] = ucfirst($page); // Capitalize the first letter

            echo view('templates/header', $data);
            echo view('pages/'.$page, $data);
            echo view('templates/footer', $data);
        }
   
     
        public function showuser($id = null)
        {
       
	    //$db = new UserModel();
	    //$db = db_connect();
	    //$query = $db->query("SELECT * FROM users WHERE user_id=11");
	    //$result_query = $query->getResultArray();
        //$result = $result_query[0];    
	    //echo $result['user_name'];
	    //OK
	    //return view('show-rec', $result);
	    //$userModel = new UserModel();
        //$data['users'] = $userModel->orderBy('user_id', 'DESC')->findAll();
       // $userModel->select('user_name, user_email');
        //$data['users'] = $userModel->select('user_name, user_email, user_id')->where('user_id', 11)->find();
        // No need use codeigniter findAll()
        //$theData['result'] = $data['users'][0];
        //print_r($theData['result']); echo "<br>";

        
        //return view('welcome_message', $theData);
       // $items = (new UserModel())->where('id', 1)->get()->getRowArray(); // will be array with user data 
        //this works 
        //$userModel = new UserModel();
        //$data['users'] = $userModel->where('id', 11)->findAll();
        //print_r( $data['users'] );
        //return view('show_members', $data);
	    //end this works


	    $userModel = new UserModel();
        //$data['users'] = $userModel->where('user_id', 11)->findAll();
        $data['users'] = $userModel->select('id, email, name, phone')->findAll();
        return view('show_members', $data);
	}
    
  

}
