<?php
/*	

 *
 pf, designation, department, address1, address2,address3, pin, district, state, dob, blood_group,
 phone1, phone2, gender, created_at
 *
 *
 */
class Employee{
	public $id;
	public $pf;
	public $designation;
	public $department ;
	public $address1 ;
	public $address2 ;
	public $address3 ;
	public $pin ;
	public $district ;
	public $state ;
	public $dob ;
	public $blood_group ;
	public $phone1 ;
	public $phone2 ;
	public $gender ;
	public $created_at ;
	
	public function __construct($pf=0, $designation="", $department="" , $address1="" , $address2="" ,
	$address3="" , $pin="" , $district="" , $state="Kerala" , $dob="" , $blood_group="" , $phone1="" ,
	$phone2="" , $gender="" , $created_at=now()) {
		$this->pf = $pf;
		$this->designation = $designation;
		$this->department = $department;
		$this->address1 = $address1;
		$this->address2 = $address2;
		$this->address3 = $address3;
		$this->pin = $pin;
		$this->district = $district;
		$this->state = $state;
		$this->dob = $dob;
		$this->blood_group = $blood_group;
		$this->phone1 = $phone1;
		$this->phone2 = $phone2;
		$this->gender = $gender;
		$this->created_at -> now();
	}
	public function save(){

		$qry = $conn->prepare("INSERT INTO employees(pf, designation, department, address1, address2,address3, pin, district, state, dob, blood_group,
			phone1, phone2, gender, created_at) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$qry->execute(array($this->pf, $this->designation, $this->department, $this->address1, $this->address2,
			$this->address3, $this->pin, $this->district, $this->state, $this->dob, $this->blood_group, $this->phone1, $this->phone2, $this->gender, $this->created_at));
	}

	public function find($id){
		$qry = $conn->prepare("SELECT * FROM employees WHERE id = ?");
		$qry->execute(array($id));
		
	}
	
}


?>
