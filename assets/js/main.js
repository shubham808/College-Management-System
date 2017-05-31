function faculty(){
  arr=[];
  $.post("faculty.php",
          {arr: arr},
          function(data,textStatus){
              if(textStatus==="success"){
                if(data!="failed"){
                      data=JSON.parse(data);
                      div=$("<div></div>");
                      div.append("<h2><u>Faculty Details</u></h2><br>");
                      for (var i = 0; i < data.length;  i++) {
                        div.append("<h4>Name: "+data[i]['faculty_name']+"</h4>"
                        +"<p>Faculty Id:"+data[i]['faculty_id']+"</p>"
                        +"<p>Gender:"+data[i]['faculty_gender']+"</p>"
                        +"<p>Contact:"+data[i]['faculty_contact']+"</p><h4>Courses:"+"  "+data[i]['number_of_courses']+"</h4>");

                        for (var j = 0; j < data[i]['number_of_courses'] ; j++) {
                          div.append("<p>Course "+(j+1)+" ID :  "+data[i]['course_id'+j+data[i]['faculty_id']]+" </p>");
                          div.append("<p>Course "+(j+1)+" Name :  "+data[i]['course_name'+j+data[i]['faculty_id']]+" </p>");
                        };
                        div.append("<h4>Description:</h4><p>"+data[i]['description']+"</p>");
                     div.append("<br><br>");
                      };

                      $('#faculty').append(div);
                    }              
              }         
          }
        );
}

function submit_form(){    
  var arr = [
        
        document.getElementById('username').value,
        document.getElementById('password').value
  ];
  $.post("auth.php",
          {arr: arr},
          function(data,textStatus){
              if(textStatus==="success"){
                data = JSON.parse(data);

                if(data!="failed"){
                  if(data['type']=='student')
                  window.location="student_data.php";
                  else
                    console.log(data['type']);                
                }
              }         
          }
        );
}

function add_student(){
    var arr = [
        
        document.getElementById('name').value,
        document.getElementById('roll_number').value,
        document.getElementById('date_of_birth').value,
        document.getElementById('address').value,
        document.getElementById('gender').value,
        document.getElementById('contact').value,
        document.getElementById('year').value,
  ];

  $.post("add_student.php",
          {arr: arr},
          function(data,textStatus){
              if(textStatus==="success"){

                if(data!="failed")
                  window.location.reload();              
              }         
          }
        );  
}

function student_details(){

      roll_number=document.getElementById('student_details');
      roll_number=roll_number.getAttribute('data-id');

  console.log(roll_number);
  $.post("fetch.php",
          {roll_number: roll_number},
          function(data,textStatus){
            if(textStatus==="success"){
              
              data = JSON.parse(data);
              console.log(data);
              
              
              // 
            }
          }
    );
}

function add_form_toggle() {
    var x = document.getElementById('form');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}
function label(id,x,color){
    document.getElementById(id).innerHTML=x;
    document.getElementById(id).style.color=color;
}




function delete_student(this_student){

this_student=this_student.parentNode;
this_student=this_student.children;
roll_number=this_student[2].innerHTML;
roll_number=roll_number.slice(13);  

  $.post("delete.php",
      {roll_number: roll_number},
      function(data,textStatus){
          if(textStatus==="success"){
            if(data.trim()!="Error")
            window.location.reload();
          }
      }
    );
}
var roll;
function edit_student(this_student){


this_student=this_student.parentNode;

this_student=this_student.children;
roll=this_student[2].innerHTML;
roll=roll.slice(13);  

console.log(this_student[4].innerHTML);

for (var i = 2; i < 8; i++) {
  value=this_student[i].innerHTML;
  value=value.split(':')[1];
  value=value.trim();
  this_student[i].innerHTML='<input class="form-control" type="text" name="name" id="edit'+i+'" value="'+value+'">';
};


value=this_student[8].innerHTML;
value=value.split(':')[1];
value=value.trim();
this_student[8].innerHTML='<input class="form-control" type="text" name="name" id="edit'+8+'" value="'+value+'"><br><input type="button" onclick="save_student(this)"" value="Save" name="save" id="save" class="btn btn-info" />';
this_student[9].style = "display: none;";
this_student[10].style = "display: none;";

   
}


function save_student(this_student){
    
    var arr=[];
    for(var i = 2; i < 9; i++){
      arr.push(document.getElementById('edit'+i).value);
    };
    arr.push(roll);
    console.log(arr);

  $.post("edit.php",
      {arr: arr},
      function(data,textStatus){
          if(textStatus==="success"){
            if(data!="Error"){
            alert("Edit Made!");
            window.location.reload();
          }
        }
      }
    );

}