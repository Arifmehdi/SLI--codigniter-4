<?php
namespace App\Controllers;
use App\Models\Slider;
use App\Models\Contact;
use App\Models\Founder;
use App\Models\Service;

class AdminController extends BaseController
{
    public function index()
    {
        return view('dashboard/index');
    }

    public function admin()
    {
        return view('dashboard/admin_layout');
    }

    public function blank()
    {
        return view('dashboard/blank');
    }

    public function slider()
    {
        $model = new Slider();
        $data['list'] = $model->findAll();

        return view('dashboard/slider',$data);
    }

    public function create()
    {
        return view('dashboard/add_slider');
    }
    public function store_slider()
    {

   
        $slider = new Slider();
        $file =$this->request->getFile('img');
        echo $abc = getimagesize($file->originalName);
        echo "<pre>";
        print_r($file);
        exit;
        if($file->isValid())
        {
            $extension = $file->getClientExtension();
            $name = date('Ymdhis').'.'.$extension;
            $file->move('public/photos/slider/',$name);
        }
        $data = [
            'img' => $name,
            'title' => $this->request->getPost('title'),
            'subtitle' => $this->request->getPost('subtitle')
        ];
     
        
        $slider->save($data);
        return redirect()->to(base_url('slider'))->with('status','Your data added successfully');
    }

    public function edit_slider($id)
    {
        $slider = new SLider();
        $data['list'] = $slider->find($id);
       
        return view('dashboard/edit_slider',$data);
    }
    public function update_slider($id)
    {
        $slider = new Slider();
            $file = $this->request->getFile('img');
            if($file->isValid()){
                $extension = $file->getClientExtension();
                $name = md5(rand(100,1000)).'.'.$extension;
                $file->move('public/photos/slider',$name);
            }
        $data = [
            'img' => $name, 
            'title' => $this->request->getPost('title'), 
            'subtitle' => $this->request->getPost('subtitle'), 
        ];

        $slider->update($id,$data);
        return redirect()->to(base_url('slider'))->with('status','Your data update Successfully');
    }

    public function delete_slider($id)
    { 
        $slider = new Slider();
        $slider->delete($id);
        return redirect()->to(base_url('slider'))->with('error','Youe data deleted successfully');

    }


    // contact

    public function add_contact()
    {
        return view('dashboard/add_contact');
    }

    public function store_contact(){
        $contact = new Contact();

        $data = [
            'about_us' => $this->request->getPost('about_us'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'address' => $this->request->getPost('address'),
            'map' => $this->request->getPost('map'),
        ];

        $contact->save($data);
        return redirect()->to('contact/view')->with('status','Data added successfully');
    }
    public function view_contact()
    {
        $contact = new Contact();
        $data['list'] = $contact->findAll();
        // print_r($data);
        return view('dashboard/contact',$data);
    }

    public function edit_contact($id)
    {
        $contact = new Contact();
        $data['list'] = $contact->find($id);
        // print_r($data);
        return view('dashboard/edit_contact',$data);
    }
    public function update_contact($id)
    {
        $contact = new Contact();
        $data= [
            'about_us' => $this->request->getPost('about_us'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'address' => $this->request->getPost('address'),
            'map' => $this->request->getPost('map'),
            
        ];
   
        $contact->update($id,$data);
        return redirect()->to(base_url('contact/view'))->with('status','Updated successfully');
     
    }

    public function delete_contact($id)
    {
        $contact = new Contact();
        $contact->delete($id);
        return redirect()->to(base_url('contact/view'))->with('error','Deleted successfully');
    }


     //founder

     public function add_founder()
     {
        return view('dashboard/add_founder');
     }

    public function store_founder()
    {
        $founder= new Founder();

        $photo = $this->request->getFile('photo');
        if($photo->isValid()){
            $extension =$photo->getClientExtension();
            $name = md5(rand(100,1000)).'.'.$extension;
            $photo->move('public/photos/founder',$name);
        }
        $data = [
            'photo' => $name,
            'name' => $this->request->getPost('name'),
            'designation'=> $this->request->getPost('designation'),
            'details'=> $this->request->getPost('details')

        ];
        $founder->save($data);
        return redirect()->to('founder/view')->with('status','Data added successfully');
    }

     public function view_founder()
     {
         $founder = new Founder();

         $data['list'] = $founder->findAll();
         // print_r($data);
         return view('dashboard/founder',$data);
     }
 
     public function edit_founder($id)
     {
         $founder = new Founder();
         $data['list'] = $founder->find($id);
         // print_r($data);
         return view('dashboard/edit_founder',$data);
     }
     public function update_founder($id)
     {
         $founder = new Founder();

         $file = $this->request->getFile('photo');
         if($file->isValid()){
            $extension = $file->getClientExtension();
            $name = md5(rand(100,1000)).'.'.$extension;
            $file->move('public/photos/founder',$name);
        }
         $data= [
             'photo' => $name,
             'name' => $this->request->getPost('name'),
             'designation' => $this->request->getPost('designation'),
             'details' => $this->request->getPost('details'),

             
         ];
    
         $founder->update($id,$data);
         return redirect()->to(base_url('founder/view'))->with('status','Updated successfully');
      
     }

     public function delete_founder($id)
     {
        $founder = new Founder();
        $founder->delete($id);
        return redirect()->to(base_url('founder/view'))->with('error','Deleted successfully');
     }

    //  service
    public function service($id=null)
    {
        $data = array();
        if($id){
            $service = new Service();
            $data['list'] = $service->find($id);

        };
        return view('dashboard/service',$data);
    }

    public function store_service()
    {
        $service = new Service();

        $photo = $this->request->getFile('photo');
        $logo = $this->request->getFile('logo');

        if($photo->isValid()){
            $extension_photo = $photo->getClientExtension();
            $name_photo = md5(rand(100,1000)).'.'.$extension_photo;
            $path = 'public/photos/services/';
            $photo->move($path,$name_photo);
        }

        if($logo->isValid()){
            $extension_logo = $logo->getClientExtension();
            $name_logo = md5(rand(100,1000)).'.'.$extension_logo;
            $path_logo = 'public/photos/services/';
            $logo->move($path_logo,$name_logo);
        }

        $data = [
            'photo' => $name_photo,
            'logo' => $name_logo,
            'title' => $this->request->getPost('title'),
            'details' => $this->request->getPost('details'),
        ];
        $service->save($data);
        return redirect()->to(base_url('service/view'))->with('status','Data added successfully');
    }

    public function view_service()
    {
        $service = new Service();
   
        $data['list'] = $service->findAll();
        return view('dashboard/view_service',$data);
    }

    public function update_service($id)
    {
        $service = new Service();

        $photo = $this->request->getFile('photo');
        $logo = $this->request->getFile('logo');

        if($photo->isValid()){
            $extension_photo = $photo->getClientExtension();
            $name_photo = md5(rand(100,1000)).'.'.$extension_photo;
            $path = 'public/photos/services/';
            $photo->move($path,$name_photo);
        }

        if($logo->isValid()){
            $extension_logo = $logo->getClientExtension();
            $name_logo = md5(rand(100,1000)).'.'.$extension_logo;
            $path_logo = 'public/photos/services/';
            $logo->move($path_logo,$name_logo);
        }

        $data = [
            'photo' => $name_photo,
            'logo' => $name_logo,
            'title' => $this->request->getPost('title'),
            'details' => $this->request->getPost('details'),
        ];
        $service->update($id,$data);
        return redirect()->to(base_url('service/view'))->with('status','Updated successfully');
       
    }

    public function delete_service($id)
    {
       $service = new Service();
       $service->delete($id);
       return redirect()->to(base_url('service/view'))->with('error','Deleted successfully');
    }

    //about page slidebar
    public function aboutSlider($id=null)
    {
        $data = array();
        if($id){
            $service = new Service();
            $data['list'] = $service->find($id);

        };
        return view('dashboard/aboutSlider',$data);
    }

    public function store_aboutSlider()
    {
        $service = new Service();

        $photo = $this->request->getFile('photo');
        $logo = $this->request->getFile('logo');

        if($photo->isValid()){
            $extension_photo = $photo->getClientExtension();
            $name_photo = md5(rand(100,1000)).'.'.$extension_photo;
            $path = 'public/photos/services/';
            $photo->move($path,$name_photo);
        }

        if($logo->isValid()){
            $extension_logo = $logo->getClientExtension();
            $name_logo = md5(rand(100,1000)).'.'.$extension_logo;
            $path_logo = 'public/photos/services/';
            $logo->move($path_logo,$name_logo);
        }

        $data = [
            'photo' => $name_photo,
            'logo' => $name_logo,
            'title' => $this->request->getPost('title'),
            'details' => $this->request->getPost('details'),
        ];
        $service->save($data);
        return redirect()->to(base_url('service/view'))->with('status','Data added successfully');
    }

    public function view_aboutSlider()
    {
        $service = new Service();
   
        $data['list'] = $service->findAll();
        return view('dashboard/view_service',$data);
    }

    public function update_aboutSlider($id)
    {
        $service = new Service();

        $photo = $this->request->getFile('photo');
        $logo = $this->request->getFile('logo');

        if($photo->isValid()){
            $extension_photo = $photo->getClientExtension();
            $name_photo = md5(rand(100,1000)).'.'.$extension_photo;
            $path = 'public/photos/services/';
            $photo->move($path,$name_photo);
        }

        if($logo->isValid()){
            $extension_logo = $logo->getClientExtension();
            $name_logo = md5(rand(100,1000)).'.'.$extension_logo;
            $path_logo = 'public/photos/services/';
            $logo->move($path_logo,$name_logo);
        }

        $data = [
            'photo' => $name_photo,
            'logo' => $name_logo,
            'title' => $this->request->getPost('title'),
            'details' => $this->request->getPost('details'),
        ];
        $service->update($id,$data);
        return redirect()->to(base_url('service/view'))->with('status','Updated successfully');
       
    }

    public function delete_aboutSlider($id)
    {
       $service = new Service();
       $service->delete($id);
       return redirect()->to(base_url('service/view'))->with('error','Deleted successfully');
    }

   
}

?>