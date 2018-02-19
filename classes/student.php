<?php
$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/Database.php');
	include_once ($filepath.'/../lib/session.php');
	include_once ($filepath.'/../helpers/Format.php');
/**
* student class
*/
class student 
{
	private $db;
	private $fm;
	function __construct()
	{
		$this->db=new Database();
		$this->fm=new Format();
	}
	public function getallstudent(){
		$selectstudent="select * from tbl_student";
		$result=$this->db->select($selectstudent);
		return $result;

	} 
	public function getinsertedstudent($name,$roll){
		$name=$this->fm->validation($name);
		$roll=$this->fm->validation($roll);
		if(empty($name) || empty($roll)){
return "<div class='alert alert-danger'>field must not be empty</div>";
		}else{
			$selectroll="select * from tbl_student where stroll='$roll'";
			$result=$this->db->select($selectroll);
			if($result){return "<div class='alert alert-danger'>please give a unique roll number</div>";}else{

				$insertquery="INSERT INTO `tbl_student` (`stid`, `stname`, `stroll`) VALUES (NULL, '$name', '$roll')";
				$insertresult=$this->db->insert($insertquery);
				$insertroll="INSERT INTO tbl_attendence ( satroll) VALUES ( '$roll')";
				$insertresult=$this->db->insert($insertroll);
				if($insertresult){return "<div class='alert alert-danger'>student successfully added</div>";}else{return "<div class='alert alert-danger'>student not added</div>";}

			}
		}
	}

	public function getinsertattendence($curren_date,$attend=array()){
		$selecttime="SELECT * from tbl_attendence where attendencetime='$curren_date'";
		$result=$this->db->select($selecttime);
			if($result){
				return "<div class='alert alert-danger'>attendence already taken..</div>";
			}else{
				$size = count($attend);
				$totalstudent=$this->countallstudent();
				if($size!=$totalstudent){
				return "<div class='alert alert-danger'>student roll mising  </div>";
				}else{
	
		foreach ($attend as $key => $value) {
			if($value=="present"){
				$insertpresent="insert into tbl_attendence(satroll,attendence,attendencetime) VALUES('$key','present','$curren_date')";
				$presentresult=$this->db->insert($insertpresent);
			}elseif ($value=="absent") {
			$insertabsent="insert into tbl_attendence(satroll,attendence,attendencetime) VALUES('$key','absent','$curren_date')";
				$presentresult=$this->db->insert($insertabsent);
			}
		}
		if($presentresult){return "<div class='alert alert-danger'>attendence  successfully added</div>";}else{return "<div class='alert alert-danger'>attendence not added</div>";}

	}}}
	public function allattendence(){
		$selectatten="select * from tbl_attendence order by attendencetime desc";
		$result=$this->db->select($selectatten);
		return $result;
	}
	public function getattendencebydate($current_date){
$selectquery="select tbl_attendence.*, tbl_student.stname from tbl_attendence,tbl_student where tbl_attendence.satroll=tbl_student.stroll and tbl_attendence.attendencetime='$current_date'";
$result=$this->db->select($selectquery);
return $result;

	}
	public function countallstudent(){

		$select="SELECT * FROM tbl_student";
		$result=$this->db->select($select);
		if($result){
		$totalrows=$result->num_rows;
		return $totalrows;}
	}
	public function getupdateattendence($attend=array(),$dat){


				$size = count($attend);
				$totalstudent=$this->countallstudent();
				if($size!=$totalstudent){
				return "<div class='alert alert-danger'>student roll mising  </div>";
				}else{
	
		foreach ($attend as $key => $value) {
			if($value=="present"){
				$updatepresent="update  tbl_attendence set attendence='present' where satroll='$key' and attendencetime='$dat'";
				$updatepresentresult=$this->db->insert($updatepresent);
			}elseif ($value=="absent") {
			$updateabsent="update  tbl_attendence set attendence='absent' where satroll='$key' and attendencetime='$dat'";
				$updatepresentresult=$this->db->insert($updateabsent);
			}
		}
		if($updatepresentresult){return "<div class='alert alert-danger'>attendence  successfully updated</div>";}else{return "<div class='alert alert-danger'>attendence not updated</div>";}

	}

	}
}