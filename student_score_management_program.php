<<<<<<< HEAD
<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="ko" xml:lang="ko"> 
<head> 
<title> new document </title>

<script language="javascript">
 var count = 1;
 var addCount;

 var checkbox_Name = 'CHECK';
 var Student_NUMBER = 'ST_NUMBER[]';
 var Student_NAME = 'ST_NAME[]';
 var Student_LANG = 'ST_LANG_SCORE[]';
 var Student_ENG = 'ST_ENG_SCORE[]';
 var Student_SCIEN = 'ST_SCIEN_SCORE[]';
 var Student_SOCIE = 'ST_SOCIE_SCORE[]';
 var Student_CLASS = 'ST_CLAS_NAME[]'; 
 
//행추가
function addInputBox() {
	for(var i=1; i<=count; i++) {
		if(!document.getElementsByName("number")[i]) { 
			addCount = i;
			var table_Str = '<tr><td><input type="checkbox"name='+checkbox_Name+' value = '+addCount+'></td><td><input type="text" name='+Student_NUMBER+' size="10" maxlength="10"></td><td><input type="text" name='+Student_NAME+' size="10" maxlength="10"></td><td><input type="text" name='+Student_LANG+' size="3" maxlength="3"></td><td><input type="text" name='+Student_ENG+' size="3" maxlength="3"></td><td><input type="text" name='+Student_SCIEN+' size="3" maxlength="3"></td><td><input type="text" name='+Student_SOCIE+' size="3" maxlength="3"></td><td><select name='+Student_CLASS+' size="1"><option value="A">A반</option><option value="B">B반</option><option value="C">C반</option><option value="D">D반</option><option value="E">E반</option><option value="F">F반</option><option value="G">G반</option></select></td></tr>';
			var table = document.getElementById("dynamic_table");
			var newRow = table.insertRow();
			newRow.innerHTML = table_Str;
			count++;
			break;
		}
		else addCount = count;
	}
 }
 
function subtractInputBox() {
		var table = document.getElementById("dynamic_table");
		var rows = dynamic_table.rows.length;
		var chk = 0;
		var delet_array = new Array();
		var flag = 0;
		if(rows > 1){
			for(var i = 1; i < document.gForm.CHECK.length; i++){
			 	if(document.gForm.CHECK[i].checked == true){
					table.deleteRow(i+1);
					i--;
					count--;
					chk++;
				}
			}
			if(chk <= 0){
				alert("삭제할 행 선택하세여");
			}
		}
}

function showtable(){
	var show_table = document.getElementById("show_table");
}
</script>

<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

 
<meta http-equiv="content-type" content="text/html;charset=utf-8"/> 
</head>

<style type="text/css">
        body { text-align:center; width:100%; height:100%;}
        
         #header {
            width:1200px; height:200px; background-color:; border:groove 1px silver;
            padding:5px 5px 5px 5px; margin:0px 0px 10px 0px;}
            

		 #header_2 {
            width:1200px; height:200px; background-color:; border:groove 1px silver; overflow:scroll;
            padding:5px 5px 5px 5px; margin:0px 0px 10px 0px;}	
			
         #header_3 {
            width:1200px; height:200px; background-color:; border:groove 1px silver;
            padding:5px 5px 5px 5px; margin:0px 0px 10px 0px;}			

         #header_4 {
            width:1200px; height:500px; background-color: border:groove 1px silver;
            padding:5px 5px 5px 5px; margin:0px 0px 10px 0px;}			


		#header_4_left_chart_class_average {
            width:720px; height:500px; background-color:; border:groove 1px silver;
            padding:5px 5px 5px 5px; margin:0px 0px 10px 0px; float:left;}

        #header_4_right_chart_class_average {
            width:450px; height:500px; background-color:; border:groove 1px silver;
            padding:5px 5px 5px 5px; margin:0px 0px 10px 0px; float:left;}						
		
		 #header_4_right_chart_class_average_top {
            width:440px; height:200px; background-color:; border:groove 1px silver;overflow:scroll;
            padding:5px 5px 5px 5px; margin:0px 0px 10px 0px; float:left;}						
		
		#header_4_right_chart_class_average_bottom {
            width:440px; height:270px; background-color:; border:groove 1px silver;overflow:scroll;
            padding:5px 5px 5px 5px; margin:0px 0px 10px 0px; float:left;}
		
		 #header_5 {
            width:1200px; height:500px; background-color:; border:groove 1px silver;
            padding:5px 5px 5px 5px; margin:0px 0px 10px 0px;}	
		
		
		#header_5_left_chart_class_average {
            width:720px; height:500px; background-color:; border:groove 1px silver;
            padding:5px 5px 5px 5px; margin:0px 0px 10px 0px; float:left;}
		
		
		 #header_5_right_chart_class_average {
            width:450px; height:500px; background-color:; border:groove 1px silver;
            padding:5px 5px 5px 5px; margin:0px 0px 10px 0px; float:left;}						
		
		
		
    </style>
</head>



 <h2>학생 시험 평가 관리 프로그램</h2>
<body>

<<<<<<< HEAD
  <!-- 깃 다루기 연습
=======
  <!--
>>>>>>> 7749d14ef6199d8caa8bf53dc0e0415ceb780ebd
    테이블로 작성
    <table border="1" width="100%">
        <tr>
            <td colspan="3">Navigator</td>
        </tr>
        
        <tr>
            <td style="width:185px; height:100px;">Left</td>
            <td>Content</td>
            <td style="width:185px;height:100px;">Right</td>
        </tr>
        <tr>
            <td colspan="3" align="center">Copyright XHTML/CSS All right reserved</td>
        </tr>
    </table>
-->
    
        <div id="header">프로그램 소개 </div>
        <div id="header_2">
		 입력란
		<form name="gForm" action="student_score_management_program.php" method="post">
			<table id="dynamic_table" border="1" size = "530">
				<tbody>
					<tr>
						<td width="20" ></th>
						<td width="100">학번</td>
						<td width="100">이름</td>
						<td width="53">언어</td>
						<td width="53">영어</td>
						<td width="53">과학</td>
						<td width="53">사회</td>
						<td width="53">학급</td>
					</tr>
				</tbody>
			</table>
		<input type="button" value="추가" onclick="javascript:addInputBox();"> 
		<input type="button" value="삭제" onclick="javascript:subtractInputBox();">
		<input type="submit" value="전송">			
		</form>
		 </div>
         
		 
		 <div id="header_3">
		 row 데이터 게시판 형태로 출력 
		<form name="showForm" action="student_score_management_program.php" method="post">
			<input type="submit" value="찾기"><input type="text" name = "find_record">	
			<table id="show_table" border="1" size = "530">
				<tbody>
					<tr>
						<td width="20" ></th>
						<td width="100">학번</td>
						<td width="100">이름</td>
						<td width="53">언어</td>
						<td width="53">영어</td>
						<td width="53">과학</td>
						<td width="53">사회</td>
						<td width="53">학급</td>
					</tr>
				</tbody>
			</table>
		<input type="button" value="추가" onclick="javascript:addInputBox();"> 
		<input type="button" value="삭제" onclick="javascript:subtractInputBox();">
				
		</form>
		 </div>
		 
	
<?php
	$servername = "localhost";
	$username = "root";
	$password = "kjs68770!";
    
	$dateStemp=  date("Y/m/d D A h:i:s");
	
	try {
    //$conn = new PDO("mysql:host=$servername;dbname=blueone", $username, $password);
    // set the PDO error mode to exception
    //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn = mysqli_connect($servername,$username,$password);
    
 	if($conn){
		mysqli_select_db($conn,"blueone");	
		
		$size = count($_POST['ST_NUMBER']);
		$Student_NUMBER = $_POST['ST_NUMBER'];
		$Student_NAME = $_POST['ST_NAME'];
		$Student_LANG = $_POST['ST_LANG_SCORE'];
		$Student_ENG = $_POST['ST_ENG_SCORE'];
		$Student_SCIEN = $_POST['ST_SCIEN_SCORE'];
		$Student_SOCIE = $_POST['ST_SOCIE_SCORE'];
		$Student_CLASS = $_POST['ST_CLAS_NAME']; 	
			
		for($i = 0; $i < $size; $i++){
			$sql = "insert into student_score_table(student_number, student_name,student_language,student_english,student_science,student_society,student_class) value($Student_NUMBER[$i],'$Student_NAME[$i]',$Student_LANG[$i],$Student_ENG[$i],$Student_SCIEN[$i],$Student_SOCIE[$i],'$Student_CLASS[$i]');";
			$result = mysqli_query($conn,$sql);
			if($size > 0){
				if($result){
					echo "쿼리성공";
				}
				else {
					echo "쿼리실패";
					echo $size;
					echo $sql;
					$error = mysql_error($conn);
					echo $error;
				}
			}
		}
		$result = mysqli_query($conn,"	
		select  student_number,
		        student_name,
	            avg(student_language),
	            avg(student_english),
				avg(student_science),
	            avg(student_society),
	            student_class
				from student_score_table
				group by student_class
	");

   	$grade_result = mysqli_query($conn,"	
		SELECT student_number,
				student_name,
				student_class,
				(student_language + student_english + student_science + student_society)/4 as score_average
				FROM blueone.student_score_table
				order by (student_language + student_english + student_science + student_society)/4 desc
		");



   	$class_avg_result = mysqli_query($conn,"	
       SELECT student_class,
       sum((student_language + student_english + student_science + student_society)/4 )as score_average
       FROM blueone.student_score_table
       group by student_class
       order by sum((student_language + student_english + student_science + student_society)/4 ) desc 

	  ");

	
	 $school_avg_result = mysqli_query($conn,"	
   
      SELECT avg(student_language), avg(student_english),avg(student_science),avg(student_society) 
      FROM blueone.student_score_table

	 ");
	
	
		 $school_lack_result = mysqli_query($conn,"	
   
     
	 
	     	select      case
			       when (
                 FIELD(  LEAST(    
	             floor(avg(student_language) ),
	             floor(avg(student_english) ),
	             floor(avg(student_science) ),
	             floor(avg(student_society) )   ),
	             floor(avg(student_language)) ,
				 floor(avg(student_english) ),
                 floor(avg(student_science)),
                 floor(avg(student_society)  ))
                 
                 ) = 1 
                 then '국어'
                 
                 when (
                 FIELD(  LEAST(    
	             floor(avg(student_language) ),
	             floor(avg(student_english) ),
	             floor(avg(student_science) ),
	             floor(avg(student_society) )   ),
	             floor(avg(student_language)) ,
				 floor(avg(student_english) ),
                 floor(avg(student_science)),
                 floor(avg(student_society)  ))
                 
                 ) = 2 
                 then '영어'
                 
				  when (
                 FIELD(  LEAST(    
	             floor(avg(student_language) ),
	             floor(avg(student_english) ),
	             floor(avg(student_science) ),
	             floor(avg(student_society) )   ),
	             floor(avg(student_language)) ,
				 floor(avg(student_english) ),
                 floor(avg(student_science)),
                 floor(avg(student_society)  ))
                 
                 ) = 3 
                 then '과학'
                 
				  when (
                 FIELD(  LEAST(    
	             floor(avg(student_language) ),
	             floor(avg(student_english) ),
	             floor(avg(student_science) ),
	             floor(avg(student_society) )   ),
	             floor(avg(student_language)) ,
				 floor(avg(student_english) ),
                 floor(avg(student_science)),
                 floor(avg(student_society)  ))
                 
                 ) = 4 
                 then '사회'
                 
                 else 
                  '못찾음'
                       
                 
                 end as lack_class , student_class
                 
					from student_score_table
				    group by student_class
	 
	 
	 
	 
	 
	 ");
	$to_encode = array();
	$i = 0;
	// 쿼리 결과물 의 리스트 패치 루프 문  start *****
	while ($row = mysqli_fetch_array($result) ) {
		
		$student_number[$i]     = $row['student_number']; 
		$student_name[$i]        = $row['student_name']; 
		$student_language[$i]   = $row['avg(student_language)']; 
		$student_english[$i]      = $row['avg(student_english)']; 
		$student_science[$i]      = $row['avg(student_science)']; 
		$student_society[$i]      = $row['avg(student_society)']; 
		$student_class[$i]         = $row['student_class']; 
		 
		 
		 //echo $row['avg(student_language)'];
		 
		  //		  echo $student_number[$i];
         // echo "<br>";	

         ++$i;		  
	}
	
	$e = 0;
		// 쿼리 결과물 의 리스트 패치 루프 문  start *****
	while ($grade_row = mysqli_fetch_array($grade_result) ) {
		
		$student_number_grade[$e]     = $grade_row['student_number']; 
		$student_name_grade[$e]        = $grade_row['student_name']; 
        $student_class_grade[$e]         = $grade_row['student_class']; 
		$score_average_grade[$e]        = $grade_row['score_average']; 
	
		 
		 
		 //echo $row['avg(student_language)'];
		 
		  //		  echo $student_number[$i];
         // echo "<br>";	

         ++$e ;		  
	}
	
	$t = 0;
		while ($class_avg_row = mysqli_fetch_array($class_avg_result) ) {
		
		 $student_class_rank[$t]          = $class_avg_row['student_class']; 
		 $score_average_rank[$t]         = $class_avg_row['score_average']; 


        // echo "<br>";	

         ++$t ;		  
	}
	
	
		$u = 0;
		while ($school_avg_row = mysqli_fetch_array($school_avg_result) ) {
		
		 $student_language_rank[$u]          = $school_avg_row['avg(student_language)']; 
		 $student_english_rank[$u]             = $school_avg_row['avg(student_english)']; 
		 $student_science_rank[$u]             = $school_avg_row['avg(student_science)']; 
		 $student_society_rank[$u]              = $school_avg_row['avg(student_society)']; 


        // echo "<br>";	

     
	}
	
		$v = 0;
		while ($school_lack_row = mysqli_fetch_array($school_lack_result) ) {
		
		 $lack_class[$v]                  = $school_lack_row['lack_class']; 
		 $student_class[$v]             = $school_lack_row['student_class']; 

        // echo "<br>";	

		++$v ;	
  	}
	
	// 쿼리 결과물 의 리스트 패치 루프 문  end *****
	//echo json_encode($to_encode);
	
	mysqli_close($conn);	

	}else
	{
		echo "mySQL 접속을 실패했습니다.";
	}
	
	}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
		 
	 <div id="header_4">
		 
		    <div id="header_4_left_chart_class_average">
		 
	        <div id="chart_div"></div>
			
		 
		 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		 <script>
	      google.charts.load('current', {packages:['corechart']});
         </script>
         <div id="chart_div"></div>
		 
		 <div style="text-align:center;">
	      막대 그래프 <br>
	      <!--
		  <button type="button" onclick="chart_options.isStacked=false; drawChart()">false(기본값)</button>
	      <button type="button" onclick="chart_options.isStacked=true; drawChart()">true</button>
	      <button type="button" onclick="chart_options.isStacked='percent'; drawChart()">'percent' (문자열)</button>
   		  -->
		  </div>
		     
			 
			 <script type="text/javascript">
               
	// 로딩 완료시 함수 실행하여 차트 생성
	google.charts.setOnLoadCallback(drawChart);

	// 차트 옵션을 전역으로 설정했습니다. 설정을 바꿔보는 예제를 만들기 위해서요.
	var chart_options = {
		title : '각 반마다 과목별 평균',
		width : 700,
		height : 400,
		bar : {
			groupWidth : '50%'
		},
		isStacked : true // 그래프 쌓기(스택), 기본값은 false
	};

	function drawChart(){

		// 차트 데이터
		// 제목 그리고 항목들
		// 제목과 항목수를 맞춰주어야 합니다. 7
		var data = new google.visualization.DataTable();

		data.addColumn('string', 'Month');
		data.addColumn('number', 'student_language' );
		data.addColumn('number', 'student_english' );
		data.addColumn('number', 'student_science' );
		data.addColumn('number', 'student_society' );
		
        
		<?php
		for ($j = 0; $j < $i; $j++  ){
		?>
		 
		 
		 data.addRow(['<?=$student_class[$j]?>반',<?=$student_language[$j]?>, <?=$student_english[$j]?>,<?=$student_science[$j]?> ,<?=$student_society[$j]?>    ]);		
         
		 <?php
		}	
		?>
		    
		
   		var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
		chart.draw(data, chart_options);
	}

</script>
			 
		
			    </div>
	
    <div id="header_4_right_chart_class_average">
    

	        <div id="header_4_right_chart_class_average_top">
		         반 순위 
			 
			 <table>
			 <tr>
			 <td>클래스</td><td>클래스 평균</td>
			 </tr>
             
			 <?php
			 	for ($k = 0; $k < $t; $k++  ){
			 ?>
			 <tr>
        			
                     <td><?=$student_class_rank[$k]?></td>
					 <td><?=$score_average_rank[$k]?></td>
			 </tr>
			<?php
				}
			 ?>
			 
			 
			 </table>
			 
			 
			 
			 
		    </div>
	        <div id="header_4_right_chart_class_average_bottom">
		   
		     학생순위
			 <table>
			 <tr>
			<td>학번<td>성명</td><td>클래스<td>평균</td>
			 </tr>
			 
		<?php
		for ($j = 0; $j < $e; $j++  ){
		?>
		<tr>
	
        <td><?=$student_number_grade[$j]?></td>
		<td><?=$student_name_grade[$j]?>   </td>
		<td><?=$student_class_grade[$j]?>    </td>
		<td><?=$score_average_grade[$j]?>   </td>
		</tr>
		
		<?php
		}	
		?>
		 
         
		 </table>

		 
		    </div>
	
	
	<div>
	
			 </div>
    
	
	         </div>
			   </div>
     	<div id="header_5">
	   
	     <div id="header_5_left_chart_class_average">
		    
		  
		  
		  
<div id="container" style="width: 550px; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">
function drawChart() {
   // Define the chart to be drawn.
   var data = new google.visualization.DataTable();
   data.addColumn('string', 'Browser');
   data.addColumn('number', 'Percentage');
 
 data.addRows([
      ['국어', <?=$student_language_rank[$u]?>],
      ['영어', <?=$student_english_rank[$u]?>],
      ['과학', <?=$student_science_rank[$u]?>],
	  ['사회', <?=$student_society_rank[$u]?>],
 
   ]);
   
   // Set chart options
   var options = {'title':'꿈나무 학교 과목별 평균',
      'width':550,
      'height':400,
       pieHole: 0.4
   };

   // Instantiate and draw the chart.
   var chart = new google.visualization.PieChart(document.getElementById('container'));
   chart.draw(data, options);
}
google.charts.setOnLoadCallback(drawChart);
</script> 
		  
		  
		  
		  
		  
		  
		  
			
		 </div>
	
	   <div id="header_5_right_chart_class_average">
	     
			 반별로 어떤 과목이 부족한지 분석<br>
		 
		 <table>
		 <tr>
		 <td>
		 클래스
		 </td>
		 <td>
		 제일 부족한 과목
		 </td>
		 
		 <?php
		for ($j = 0; $j < $v; $j++  ){
		?>
		<tr>
		
        <td><?=$student_class[$j]?>  반 </td>
		<td><?=$lack_class[$j]?></td>
		
		</tr>
		
		<?php
		}	
		?>
		 </table>
		 
	    </div>
	

	     </div>
</body>



</html>

=======
<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="ko" xml:lang="ko"> 
<head> 
<title> new document </title>

<script language="javascript">
 var count = 1;
 var addCount;

 var checkbox_Name = 'CHECK';
 var Student_NUMBER = 'ST_NUMBER[]';
 var Student_NAME = 'ST_NAME[]';
 var Student_LANG = 'ST_LANG_SCORE[]';
 var Student_ENG = 'ST_ENG_SCORE[]';
 var Student_SCIEN = 'ST_SCIEN_SCORE[]';
 var Student_SOCIE = 'ST_SOCIE_SCORE[]';
 var Student_CLASS = 'ST_CLAS_NAME[]'; 
 
//행추가
function addInputBox() {
	for(var i=1; i<=count; i++) {
		if(!document.getElementsByName("number")[i]) { 
			addCount = i;
			var table_Str = '<tr><td><input type="checkbox"name='+checkbox_Name+' value = '+addCount+'></td><td><input type="text" name='+Student_NUMBER+' size="10" maxlength="10"></td><td><input type="text" name='+Student_NAME+' size="10" maxlength="10"></td><td><input type="text" name='+Student_LANG+' size="3" maxlength="3"></td><td><input type="text" name='+Student_ENG+' size="3" maxlength="3"></td><td><input type="text" name='+Student_SCIEN+' size="3" maxlength="3"></td><td><input type="text" name='+Student_SOCIE+' size="3" maxlength="3"></td><td><select name='+Student_CLASS+' size="1"><option value="A">A반</option><option value="B">B반</option><option value="C">C반</option><option value="D">D반</option><option value="E">E반</option><option value="F">F반</option><option value="G">G반</option></select></td></tr>';
			var table = document.getElementById("dynamic_table");
			var newRow = table.insertRow();
			newRow.innerHTML = table_Str;
			count++;
			break;
		}
		else addCount = count;
	}
 }
 
function subtractInputBox() {
		var table = document.getElementById("dynamic_table");
		var rows = dynamic_table.rows.length;
		var chk = 0;
		var delet_array = new Array();
		var flag = 0;
		if(rows > 1){
			for(var i = 1; i < document.gForm.CHECK.length; i++){
			 	if(document.gForm.CHECK[i].checked == true){
					table.deleteRow(i+1);
					i--;
					count--;
					chk++;
				}
			}
			if(chk <= 0){
				alert("삭제할 행 선택하세여");
			}
		}
}

function showtable(){
	var show_table = document.getElementById("show_table");
}
</script>

<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

 
<meta http-equiv="content-type" content="text/html;charset=utf-8"/> 
</head>

<style type="text/css">
        body { text-align:center; width:100%; height:100%;}
        
         #header {
            width:1200px; height:200px; background-color:; border:groove 1px silver;
            padding:5px 5px 5px 5px; margin:0px 0px 10px 0px;}
            

		 #header_2 {
            width:1200px; height:200px; background-color:; border:groove 1px silver; overflow:scroll;
            padding:5px 5px 5px 5px; margin:0px 0px 10px 0px;}	
			
         #header_3 {
            width:1200px; height:200px; background-color:; border:groove 1px silver;
            padding:5px 5px 5px 5px; margin:0px 0px 10px 0px;}			

         #header_4 {
            width:1200px; height:500px; background-color: border:groove 1px silver;
            padding:5px 5px 5px 5px; margin:0px 0px 10px 0px;}			


		#header_4_left_chart_class_average {
            width:720px; height:500px; background-color:; border:groove 1px silver;
            padding:5px 5px 5px 5px; margin:0px 0px 10px 0px; float:left;}

        #header_4_right_chart_class_average {
            width:450px; height:500px; background-color:; border:groove 1px silver;
            padding:5px 5px 5px 5px; margin:0px 0px 10px 0px; float:left;}						
		
		 #header_4_right_chart_class_average_top {
            width:440px; height:200px; background-color:; border:groove 1px silver;
            padding:5px 5px 5px 5px; margin:0px 0px 10px 0px; float:left;}						
		
		#header_4_right_chart_class_average_bottom {
            width:440px; height:270px; background-color:; border:groove 1px silver;overflow:scroll;
            padding:5px 5px 5px 5px; margin:0px 0px 10px 0px; float:left;}
		
		 #header_5 {
            width:1200px; height:500px; background-color:; border:groove 1px silver;
            padding:5px 5px 5px 5px; margin:0px 0px 10px 0px;}	
		
		
		#header_5_left_chart_class_average {
            width:720px; height:500px; background-color:; border:groove 1px silver;
            padding:5px 5px 5px 5px; margin:0px 0px 10px 0px; float:left;}
		
		
		 #header_5_right_chart_class_average {
            width:450px; height:500px; background-color:; border:groove 1px silver;
            padding:5px 5px 5px 5px; margin:0px 0px 10px 0px; float:left;}						
		
		
		
    </style>
</head>



 <h2>학생 시험 평가 관리 프로그램</h2>
<body>

  <!--
    테이블로 작성
    <table border="1" width="100%">
        <tr>
            <td colspan="3">Navigator</td>
        </tr>
        
        <tr>
            <td style="width:185px; height:100px;">Left</td>
            <td>Content</td>
            <td style="width:185px;height:100px;">Right</td>
        </tr>
        <tr>
            <td colspan="3" align="center">Copyright XHTML/CSS All right reserved</td>
        </tr>
    </table>
-->
    
        <div id="header">프로그램 소개 </div>
        <div id="header_2">
		 입력란
		<form name="gForm" action="student_score_management_program.php" method="post">
			<table id="dynamic_table" border="1" size = "530">
				<tbody>
					<tr>
						<td width="20" ></th>
						<td width="100">학번</td>
						<td width="100">이름</td>
						<td width="53">언어</td>
						<td width="53">영어</td>
						<td width="53">과학</td>
						<td width="53">사회</td>
						<td width="53">학급</td>
					</tr>
				</tbody>
			</table>
		<input type="button" value="추가" onclick="javascript:addInputBox();"> 
		<input type="button" value="삭제" onclick="javascript:subtractInputBox();">
		<input type="submit" value="전송">			
		</form>
		 </div>
         
		 
		 <div id="header_3">
		 row 데이터 게시판 형태로 출력 
		<form name="showForm" action="student_score_management_program.php" method="post">
			<input type="submit" value="찾기"><input type="text" name = "find_record">	
			<table id="show_table" border="1" size = "530">
				<tbody>
					<tr>
						<td width="20" ></th>
						<td width="100">학번</td>
						<td width="100">이름</td>
						<td width="53">언어</td>
						<td width="53">영어</td>
						<td width="53">과학</td>
						<td width="53">사회</td>
						<td width="53">학급</td>
					</tr>
				</tbody>
			</table>
		<input type="button" value="추가" onclick="javascript:addInputBox();"> 
		<input type="button" value="삭제" onclick="javascript:subtractInputBox();">
				
		</form>
		 </div>
		 
	
<?php
	$servername = "localhost";
	$username = "sa";
	$password = "isdu804m";
    
	$dateStemp=  date("Y/m/d D A h:i:s");
	
	try {
    //$conn = new PDO("mysql:host=$servername;dbname=blueone", $username, $password);
    // set the PDO error mode to exception
    //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn = mysqli_connect($servername,$username,$password);
    
 	if($conn){
		mysqli_select_db($conn,"blueone");	
		
		$size = count($_POST['ST_NUMBER']);
		$Student_NUMBER = $_POST['ST_NUMBER'];
		$Student_NAME = $_POST['ST_NAME'];
		$Student_LANG = $_POST['ST_LANG_SCORE'];
		$Student_ENG = $_POST['ST_ENG_SCORE'];
		$Student_SCIEN = $_POST['ST_SCIEN_SCORE'];
		$Student_SOCIE = $_POST['ST_SOCIE_SCORE'];
		$Student_CLASS = $_POST['ST_CLAS_NAME']; 	
			
		for($i = 0; $i < $size; $i++){
			$sql = "insert into student_score_table(student_number, student_name,student_language,student_english,student_science,student_society,student_class) value($Student_NUMBER[$i],'$Student_NAME[$i]',$Student_LANG[$i],$Student_ENG[$i],$Student_SCIEN[$i],$Student_SOCIE[$i],'$Student_CLASS[$i]');";
			$result = mysqli_query($conn,$sql);
			if($size > 0){
				if($result){
					echo "쿼리성공";
				}
				else {
					echo "쿼리실패";
					echo $size;
					echo $sql;
					$error = mysql_error($conn);
					echo $error;
				}
			}
		}
		$result = mysqli_query($conn,"	
		select  student_number,
		        student_name,
	            avg(student_language),
	            avg(student_english),
				avg(student_science),
	            avg(student_society),
	            student_class
				from student_score_table
				group by student_class
	");

   	$grade_result = mysqli_query($conn,"	
		SELECT student_number,
				student_name,
				student_class,
				(student_language + student_english + student_science + student_society)/4 as score_average
				FROM blueone.student_score_table
				order by (student_language + student_english + student_science + student_society)/4 desc
		");



   	$class_avg_result = mysqli_query($conn,"	
     SELECT student_class,
       sum((student_language + student_english + student_science + student_society)/4 )as score_average
       FROM blueone.student_score_table
       group by student_class
       order by (student_language + student_english + student_science + student_society)/4 desc 

	  ");

	
	 $school_avg_result = mysqli_query($conn,"	
   
      SELECT avg(student_language), avg(student_english),avg(student_science),avg(student_society) 
      FROM blueone.student_score_table

	 ");
	
	
		 $school_lack_result = mysqli_query($conn,"	
   
     
	 
	     	select      case
			       when (
                 FIELD(  LEAST(    
	             floor(avg(student_language) ),
	             floor(avg(student_english) ),
	             floor(avg(student_science) ),
	             floor(avg(student_society) )   ),
	             floor(avg(student_language)) ,
				 floor(avg(student_english) ),
                 floor(avg(student_science)),
                 floor(avg(student_society)  ))
                 
                 ) = 1 
                 then '국어'
                 
                 when (
                 FIELD(  LEAST(    
	             floor(avg(student_language) ),
	             floor(avg(student_english) ),
	             floor(avg(student_science) ),
	             floor(avg(student_society) )   ),
	             floor(avg(student_language)) ,
				 floor(avg(student_english) ),
                 floor(avg(student_science)),
                 floor(avg(student_society)  ))
                 
                 ) = 2 
                 then '영어'
                 
				  when (
                 FIELD(  LEAST(    
	             floor(avg(student_language) ),
	             floor(avg(student_english) ),
	             floor(avg(student_science) ),
	             floor(avg(student_society) )   ),
	             floor(avg(student_language)) ,
				 floor(avg(student_english) ),
                 floor(avg(student_science)),
                 floor(avg(student_society)  ))
                 
                 ) = 3 
                 then '과학'
                 
				  when (
                 FIELD(  LEAST(    
	             floor(avg(student_language) ),
	             floor(avg(student_english) ),
	             floor(avg(student_science) ),
	             floor(avg(student_society) )   ),
	             floor(avg(student_language)) ,
				 floor(avg(student_english) ),
                 floor(avg(student_science)),
                 floor(avg(student_society)  ))
                 
                 ) = 4 
                 then '사회'
                 
                 else 
                  '못찾음'
                       
                 
                 end,student_class
                 
					from student_score_table
				    group by student_class
	 
	 
	 
	 
	 
	 ");
	$to_encode = array();
	$i = 0;
	// 쿼리 결과물 의 리스트 패치 루프 문  start *****
	while ($row = mysqli_fetch_array($result) ) {
		
		$student_number[$i]     = $row['student_number']; 
		$student_name[$i]        = $row['student_name']; 
		$student_language[$i]   = $row['avg(student_language)']; 
		$student_english[$i]      = $row['avg(student_english)']; 
		$student_science[$i]      = $row['avg(student_science)']; 
		$student_society[$i]      = $row['avg(student_society)']; 
		$student_class[$i]         = $row['student_class']; 
		 
		 
		 //echo $row['avg(student_language)'];
		 
		  //		  echo $student_number[$i];
         // echo "<br>";	

         ++$i;		  
	}
	
	$e = 0;
		// 쿼리 결과물 의 리스트 패치 루프 문  start *****
	while ($grade_row = mysqli_fetch_array($grade_result) ) {
		
		$student_number_grade[$e]     = $grade_row['student_number']; 
		$student_name_grade[$e]        = $grade_row['student_name']; 
        $student_class_grade[$e]         = $grade_row['student_class']; 
		$score_average_grade[$e]        = $grade_row['score_average']; 
	
		 
		 
		 //echo $row['avg(student_language)'];
		 
		  //		  echo $student_number[$i];
         // echo "<br>";	

         ++$e ;		  
	}
	
	$t = 0;
		while ($class_avg_row = mysqli_fetch_array($class_avg_result) ) {
		
		 $student_class_rank[$t]          = $class_avg_row['student_class']; 
		 $score_average_rank[$t]         = $class_avg_row['score_average']; 


        // echo "<br>";	

         ++$t ;		  
	}
	
	
		$u = 0;
		while ($school_avg_row = mysqli_fetch_array($school_avg_result) ) {
		
		 $student_language_rank[$u]          = $school_avg_row['avg(student_language)']; 
		 $student_english_rank[$u]             = $school_avg_row['avg(student_english)']; 
		 $student_science_rank[$u]             = $school_avg_row['avg(student_science)']; 
		 $student_society_rank[$u]              = $school_avg_row['avg(student_society)']; 


        // echo "<br>";	

     
	}
	
	
	
	// 쿼리 결과물 의 리스트 패치 루프 문  end *****
	//echo json_encode($to_encode);
	
	mysqli_close($conn);	

	}else
	{
		echo "mySQL 접속을 실패했습니다.";
	}
	
	}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
		 
	 <div id="header_4">
		 
		    <div id="header_4_left_chart_class_average">
		 
	        <div id="chart_div"></div>
			
		 
		 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		 <script>
	      google.charts.load('current', {packages:['corechart']});
         </script>
         <div id="chart_div"></div>
		 
		 <div style="text-align:center;">
	      막대 그래프 <br>
	      <!--
		  <button type="button" onclick="chart_options.isStacked=false; drawChart()">false(기본값)</button>
	      <button type="button" onclick="chart_options.isStacked=true; drawChart()">true</button>
	      <button type="button" onclick="chart_options.isStacked='percent'; drawChart()">'percent' (문자열)</button>
   		  -->
		  </div>
		     
			 
			 <script type="text/javascript">
               
	// 로딩 완료시 함수 실행하여 차트 생성
	google.charts.setOnLoadCallback(drawChart);

	// 차트 옵션을 전역으로 설정했습니다. 설정을 바꿔보는 예제를 만들기 위해서요.
	var chart_options = {
		title : '각 반마다 과목별 평균',
		width : 700,
		height : 400,
		bar : {
			groupWidth : '50%'
		},
		isStacked : true // 그래프 쌓기(스택), 기본값은 false
	};

	function drawChart(){

		// 차트 데이터
		// 제목 그리고 항목들
		// 제목과 항목수를 맞춰주어야 합니다. 7
		var data = new google.visualization.DataTable();

		data.addColumn('string', 'Month');
		data.addColumn('number', 'student_language' );
		data.addColumn('number', 'student_english' );
		data.addColumn('number', 'student_science' );
		data.addColumn('number', 'student_society' );
		
        
		<?php
		for ($j = 0; $j < $i; $j++  ){
		?>
		 
		 
		 data.addRow(['<?=$student_class[$j]?>반',<?=$student_language[$j]?>, <?=$student_english[$j]?>,<?=$student_science[$j]?> ,<?=$student_society[$j]?>    ]);		
         
		 <?php
		}	
		?>
		    
		
   		var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
		chart.draw(data, chart_options);
	}

</script>
			 
		
			    </div>
	
    <div id="header_4_right_chart_class_average">
    

	        <div id="header_4_right_chart_class_average_top">
		         반 순위 
			 
			 <table>
			 <tr>
			 <td width="50">순위</td><td>클래스</td><td>클래스 평균</td>
			 </tr>
             
			 <?php
			 	for ($k = 0; $k < $t; $k++  ){
			 ?>
			 <tr>
        			 <td ></td>
                     <td><?=$student_class_rank[$k]?></td>
					 <td><?=$score_average_rank[$k]?></td>
			 </tr>
			<?php
				}
			 ?>
			 
			 
			 </table>
			 
			 
			 
			 
		    </div>
	        <div id="header_4_right_chart_class_average_bottom">
		   
		     학생순위
			 <table>
			 <tr>
			<td width="50">순위</td><td>학번<td>성명</td><td>클래스<td>평균</td>
			 </tr>
			 
		<?php
		for ($j = 0; $j < $e; $j++  ){
		?>
		<tr>
		<td ></td>
        <td><?=$student_number_grade[$j]?></td>
		<td><?=$student_name_grade[$j]?>   </td>
		<td><?=$student_class_grade[$j]?>    </td>
		<td><?=$score_average_grade[$j]?>   </td>
		</tr>
		
		<?php
		}	
		?>
		 
         
		 </table>

		 
		    </div>
	
	
	<div>
	
			 </div>
    
	
	         </div>
			   </div>
     	<div id="header_5">
	   
	     <div id="header_5_left_chart_class_average">
		    
		  
		  
		  
<div id="container" style="width: 550px; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">
function drawChart() {
   // Define the chart to be drawn.
   var data = new google.visualization.DataTable();
   data.addColumn('string', 'Browser');
   data.addColumn('number', 'Percentage');
 
 data.addRows([
      ['국어', <?=$student_language_rank[$u]?>],
      ['영어', <?=$student_english_rank[$u]?>],
      ['과학', <?=$student_science_rank[$u]?>],
	  ['사회', <?=$student_society_rank[$u]?>],
 
   ]);
   
   // Set chart options
   var options = {'title':'꿈나무 학교 과목별 평균',
      'width':550,
      'height':400,
       pieHole: 0.4
   };

   // Instantiate and draw the chart.
   var chart = new google.visualization.PieChart(document.getElementById('container'));
   chart.draw(data, options);
}
google.charts.setOnLoadCallback(drawChart);
</script> 
		  
		  
		  
		  
		  
		  
		  
			
		 </div>
	
	   <div id="header_5_right_chart_class_average">
	     
		 반별로 어떤 과목이 부족한지 분석<br>
		 
		 <table>
		 <tr>
		 <td>
		 클래스
		 </td>
		 <td>
		 제일 부족한 과목
		 </td>
		 
		 <?php
		for ($j = 0; $j < $v; $j++  ){
		?>
		<tr>
		
        <td><?=$student_class[$j]?>  반 </td>
		<td><?=$lack_class[$j]?></td>
		
		</tr>
		
		<?php
		}	
		?>
		 </table>
		 
	    </div>
	

	     </div>
</body>



</html>

>>>>>>> cc777baabba7652608b0de317b59462246c1c8ba
