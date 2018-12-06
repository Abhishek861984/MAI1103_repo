<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style type="text/css">
	h1{
		font-family: Algerian;
		text-align: center;
		color: #17202A  ;
	}


	body{
		background-color: #1ABC9C  ;
	}

	h2{
		text-align: 20px;
	}

	#education,#onlineC,#work,#project{
		display: none;
	}
</style>

 <!-- =============================================================================================================== ============================================= Main Code ==============================================================
 =============================================================================================================-======-->



</head>
<body>

<div class="container">
  <h1>My Resumes </h1><br><br>
  <form action="resume.php" method="post">
  	<div id="bio">
 	<h1>Bio</h1>
    <div class="col-md-6">
      <label for="usr">FristName:</label>
      <input type="text" placeholder="FristName" class="form-control" id="usr"><br>
    </div>

    <div class="col-md-6">
      <label for="pwd1">LastName:</label>
      <input type="text" placeholder="LastName" class="form-control" id="pwd1"><br>
    </div>

      <div class="col-md-6">
      <label for="pwd2">Role :</label>
      <input type="text" placeholder="Role " class="form-control" id="pwd2"><br>
    </div>

     <div class="form col-md-6">
      <label for="pwd3">Email:</label>
      <input type="text" placeholder="Email" class="form-control" id="pwd3"><br>
    </div>

     <div class="form col-md-6">
      <label for="pwd4">Mobile:</label>
      <input type="text" placeholder="Mobile" class="form-control" id="pwd4"><br>
    </div>

     <div class="form col-md-6">
      <label for="pwd5"> Contacts :</label>
      <input type="text" placeholder="Contacts " class="form-control" id="pwd5"><br>

    </div>
    
    
     <div class="form col-md-6">
      <label for="pwd6">Github:</label>
      <input type="text" placeholder="Github" class="form-control" id="pwd6"><br>
    </div>


     <div class="form col-md-6">
      <label for="pwd7">Twitter:</label>
      <input type="text" placeholder="Twitter" class="form-control" id="pwd7"><br>
    </div>


    <div class="form col-md-6">
      <label for="pwd8">Locetion:</label>
      <input type="text" placeholder="Locetion" class="form-control" id="pwd8"><br>
    </div>
   
   <div class="form col-md-6">
      <label for="pwd9">Skills:</label>
      <input type="text" placeholder="Skills" class="form-control" id="pwd9"><br>
    </div>

    <div class="form col-md-6">
      <label for="pwd10"> Biopic:</label>
      <input type="text" placeholder=" Biopic" class="form-control" id="pwd10"><br>
    </div>



   <div id="comment-message" class="form-row  col-md-6">
    &nbsp;&nbsp;&nbsp;&nbsp;<label for="pwd9"> Welcome Message:</label><br>
    &nbsp;&nbsp;;<textarea name = "comment" placeholder = "Welcome Message" id = "comment" ></textarea><br><br>
    </div>

    <button type="button" onclick="page_change('bio','education')">Next Page</button>
</div>
<!-- ========================================================================================================================
============================================= Education =====================================================================-->
<div id="education">
   <h1>Education </h1>


 <div class="form col-md-6">
      <label for="pwd11">Schools:</label>
      <input type="text" placeholder="Schools" class="form-control" id="pwd11"><br>
    </div>

<div class="form col-md-6">
      <label for="pwd12">Name:</label>
      <input type="text" placeholder="Name" class="form-control" id="pwd12"><br>
    </div>


    <div class="form col-md-6">
      <label for="pwd13">Location:</label>
      <input type="text" placeholder="Location" class="form-control" id="pwd13"><br>
    </div>


    <div class="form col-md-6">
      <label for="pwd14">Degree:</label>
      <input type="text" placeholder="Degree" class="form-control" id="pwd14"><br>
    </div>


    <div class="form col-md-6">
      <label for="pwd00">Majors:</label>
      <input type="text" placeholder="Majors" class="form-control" id="pwd00"><br>
    </div>


    <div class="form col-md-6">
      <label for="pwd8">Datas:</label>
      <input type="text" placeholder="Datas" class="form-control" id="pwd8"><br><br><br><br><br>
    </div>

    <button  type="button" onclick="page_change('education','bio')">Prev Page</button>
    <button  type="button" onclick="page_change('education','onlineC')">Next Page</button>
</div>
<!-- ========================================================================================================================
================================================== Online Courses =========================================================== -->
<div id="onlineC">
<h1>Online Courese</h1>

<div class="form col-md-6">
      <label for="pwd33">Title:</label>
      <input type="text" placeholder="Title" class="form-control" id="pwd33"><br>
    </div>


<div class="form col-md-6">
      <label for="pwd55">School:</label>
      <input type="text" placeholder="School" class="form-control" id="pwd55"><br>
    </div>


<div class="form col-md-6">
      <label for="pwd66">Date:</label>
      <input type="text" placeholder="Date" class="form-control" id="pwd66"><br>
    </div><br><br><br><br>


<div class="form col-md-6">
      <label for="pwd01">Address:</label>
      <input type="text" placeholder="Address" class="form-control" id="pwd01"><br><br><br>
    </div>
<button type="button"  onclick="page_change('onlineC','education')">Prev Page</button>
<button  type="button" onclick="page_change('onlineC','work')">Next Page</button>
</div>

<!-- ============================================================================================================================
=================================================== Work =======================================================================-->
<div id="work">
 <h1>Work</h1>

<div class="form col-md-6">
      <label for="pwd8">Jobs:</label>
      <input type="text" placeholder="Jobs" class="form-control" id="pwd8">
    </div>

<div class="form col-md-6">
      <label for="pwd8">Employer:</label>
      <input type="text" placeholder="Employer" class="form-control" id="pwd8">
    </div>


<div class="form col-md-6">
      <label for="pwd8">Title:</label>
      <input type="text" placeholder="Title" class="form-control" id="pwd8">
    </div>

<div class="form col-md-6">
      <label for="pwd8">Location:</label>
      <input type="text" placeholder="Location" class="form-control" id="pwd8">
    </div>


<div class="form col-md-6">
      <label for="pwd8">Dates:</label>
      <input type="text" placeholder="Dates" class="form-control" id="pwd8">
    </div>


<div class="form col-md-6">
      <label for="pwd8">Description:</label>
      <input type="text" placeholder="Description" class="form-control" id="pwd8"><br><br>
    </div>
   <button type="button"  onclick="page_change('work','onlineC')">Prev Page</button>
<button  type="button" onclick="page_change('work','project')">Next Page</button>
</div>
<!-- ===========================================================================================================================
================================================= Project ===================================================================== -->
<div id="project">
<h1>Project</h1>

<div class="form col-md-6">
      <label for="pwd02">Porject:</label>
      <input type="text" placeholder="Porject" class="form-control" id="pwd02">
    </div>


<div class="form col-md-6">
      <label for="pwd03">Title:</label>
      <input type="text" placeholder="Title" class="form-control" id="pwd03">
    </div>

<div class="form col-md-6">
      <label for="pwd04">Dates:</label>
      <input type="text" placeholder="Dates" class="form-control" id="pwd04">
    </div>


<div class="form col-md-6">
      <label for="pwd05">Description:</label>
      <input type="text" placeholder="Description" class="form-control" id="pwd05"><br><br>



    </div>
    <button type="button"  onclick="page_change('project','work')">Prev Page</button>
<input type="submit" name="register"  value="Submit">

<!-- =================================== button code ============================================================= 
=================================================================================================================-->

</div>
 
  </form>


</div>

<script type="text/javascript">
	function page_change(current_page,target_page){
		// alert("CLICKED");
		document.getElementById(current_page).style.display = "none";
		document.getElementById(target_page).style.display = "block";
	}
</script>

</body>
</html>

	
