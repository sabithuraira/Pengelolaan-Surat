<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	public function actionSiswa()
	{
		$kompetensi='';
		$model=new Siswa('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Siswa']))
			$model->attributes=$_GET['Siswa'];

		$this->render('siswa',array(
			'model'=>$model,
			'kompetensi'=>$kompetensi,
		));
	}

	public function actionInputnilai()
	{
		$siswa=new Siswa;
		$kelas="";
		$kompetensi="";
		$j_pelajaran="";
		$pelajaran="";
		$semester="";
		$tahun="";
		$j_ulangan="";
		$pesan="";
		if(isset($_POST['kelashide'],$_POST['kompetensi'],/*$_POST['j_pelajaran'],*/$_POST['pelajaran'],$_POST['semester'],$_POST['tahun'],$_POST['j_ulangan']))
		{
			$kelas=$_POST['kelashide'];
			$kompetensi=$_POST['kompetensi'];
			$j_pelajaran=$_POST['j_pelajaran'];
			$pelajaran=$_POST['pelajaran'];
			$semester=$_POST['semester'];
			$tahun=$_POST['tahun'];
			$j_ulangan=$_POST['j_ulangan'];

			if(strlen($kelas)>0 && strlen($kompetensi)>0 /*&& strlen($j_pelajaran)>0*/ && strlen($pelajaran)>0 && strlen($semester)>0 && strlen($tahun)>0 && strlen($j_ulangan)>0)
			{
				$siswa->idkelas=$_POST['kelashide'];	
			}
		}

		if(isset($_POST))
		{
			foreach ($siswa->searchByKelas()->data as $key => $value)
			{
				
				if(isset($_POST['nilai_'.$value->idsiswa]))
				{
					//print_r("Nilai ".$value->nama."= ".$_POST['nilai_'.$value->idsiswa]."<br>");
					$nilai_skrg=Nilai::model()->findByAttributes(array(
                        'idsiswa'           =>$value->idsiswa,
                        'semester'          =>$semester,
                        'kodeulangan'       =>$j_ulangan,
                        'tahun'             =>$tahun,
                        'idkelas'           =>$kelas,
                        'kodepelajaran'		=>$pelajaran,
                    ));

					if(is_numeric($_POST['nilai_'.$value->idsiswa]) || strlen($_POST['nilai_'.$value->idsiswa])==0)
					{
						if($nilai_skrg==null)
						{
							$nilai_skrg=new Nilai;
							$nilai_skrg->idsiswa 		=$value->idsiswa;
							$nilai_skrg->semester 		=$semester;
							$nilai_skrg->kodeulangan	=$j_ulangan;
							$nilai_skrg->tahun 			=$tahun;
							$nilai_skrg->idkelas 		=$kelas;
							$nilai_skrg->kodepelajaran	=$pelajaran;
							$nilai_skrg->jenispelajaran =$j_pelajaran;
							$nilai_skrg->nama 			=$value->nama;
						}
	                    
	                    if(strlen($_POST['nilai_'.$value->idsiswa])<=0)
	                    	$nilai_skrg->nilai=0;
	                    else
	                    	$nilai_skrg->nilai=$_POST['nilai_'.$value->idsiswa];
	                    
	                    if((int)$nilai_skrg->nilai<0 || (int)$nilai_skrg->nilai>100)
	                    {
	                		$pesan.='Nilai dari '.$value->nama.' diluar range 0-100<br/>';
	                    }
	                    else
	                    {
	                    	$nilai_skrg->save();	
	                    }
	                }
	                else
	                {
	                	$pesan.='Nilai dari '.$value->nama.' bukan angka<br/>';
	                }
				}
			}
		}

		$this->render('inputnilai',array(
			'siswa'			=>$siswa,
			'kelas'			=>$kelas,
			'kompetensi'	=>$kompetensi,
			'j_pelajaran'	=>$j_pelajaran,
			'pelajaran' 	=>$pelajaran,
			'semester'		=>$semester,
			'tahun'			=>$tahun,
			'j_ulangan'		=>$j_ulangan,
			'pesan'			=>$pesan,
		));
	}

	public function actionSetpelajaran2()
	{
	    $satu='';
	    $data=Pelajaran::model()->findByPk($_POST['id_pelajaran']);

	    if($data!=null)
	    	$satu=$data->jenispelajaran;

     	echo CJSON::encode(array
     	(
         	'satu'=>$satu,
      	));
	     Yii::app()->end();
	}

	public function actionTangkappelajaran()
	{
	    $satu='';
	    $data=Pelajaran::model()->findAllByAttributes(array('jenispelajaran'=>$_POST['id_data']));
	    $data=CHtml::listData($data,'kodepelajaran','fullname');

	    foreach($data as $value=>$name)
	    {
	      	$satu.= CHtml::tag('option',
	        	array('value'=>$value),CHtml::encode($name),true);
	    }

     	echo CJSON::encode(array
     	(
         	'satu'=>$satu,
      	));
	     Yii::app()->end();
	}


	public function actionTangkapkelas()
	{
	    $satu='';
	   // $data=Kelas::model()->findAllByAttributes(array('idkompetensikeahlian'=>$_POST['id_data']));
	    //$data=CHtml::listData($data,'idkelas','kelas');
	    $data=Kelas::model()->kelasSekarang($_POST['id_data']);
	    foreach($data as $value=>$name)
	    {
	      	$satu.= CHtml::tag('option',
	        	array('value'=>$value),CHtml::encode($name),true);
	    }

     	echo CJSON::encode(array
     	(
         	'satu'=>$satu,
      	));
	     Yii::app()->end();
	}

	public function actionAutocomplete() {
		$res =array();
		if (isset($_GET['term'])) {
			$qtxt ="SELECT * FROM kelas WHERE kompkeahlian LIKE :katakunci";
			$command =Yii::app()->db->createCommand($qtxt);
			$command->bindValue(":katakunci", '%'.$_GET['term'].'%', PDO::PARAM_STR);
			$result =$command->query();
			foreach ($result as $key => $value) {
				$res[]=array('id'=>$value['idkelas'],
					'label'=>$value['kelas'].'-'.$value['kompkeahlian']);
			}
		}

		echo CJSON::encode($res);
		Yii::app()->end();
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}