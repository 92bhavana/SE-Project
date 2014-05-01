$('#companyDetails').hide();

$("#capmbaDetailsForm").submit(function(e) {
	e.preventDefault();
	submitDetails();
});

$('#submitButton').on('click', function() {
	submitDetails();
});
function submitDetails(){
	var companyName = $('#companyName').val();

	$.ajax({
		type: "POST",
		url: "capmba_details.php",
		data: { companyName: companyName }
	})
	.done(function( data ) {
		data = jQuery.parseJSON(data);
		var companyDetailsMbaTable = createCompanyDetailsMbaTable(data);
		var corporateDetailsMbaTable = createCorporateDetailsMbaTable(data);
		var facultyDetailsMbaTable = createFacultyDetailsMbaTable(data);
		var studentDetailsMbaTable = createStudentDetailsMbaTable(data);

		$("#companyDetails").html("");

		$("#companyDetails").append(companyDetailsMbaTable);
		$("#companyDetails").append(corporateDetailsMbaTable);
		$("#companyDetails").append(facultyDetailsMbaTable);
		$("#companyDetails").append(studentDetailsMbaTable);

		$('#companyDetails').show();

	});
}
function createCompanyDetailsMbaTable(data) {
	var htmlTobeAdded = "<div class='panel-heading'>Details of the Company </div>";
	htmlTobeAdded += "<table class='table' id='companyDetailsMbaTable'>";
	htmlTobeAdded += "<tr><td>Company Name </td><td>" + data.capCompany + "</td></tr>";
	htmlTobeAdded += "<tr><td>Contact Name </td><td>" + data.contactName + "</td></tr>";
	htmlTobeAdded += "<tr><td>Email </td><td>" + data.email + "</td></tr>";
	if (data.others != "") {
	htmlTobeAdded += "<tr><td>Others </td><td>" + data.others + "</td></tr>";			
	};
	htmlTobeAdded += "</table>";
	return htmlTobeAdded;
}



function createCorporateDetailsMbaTable(data) {
	var corporateDetailsMba = data.corporateDetailsMba;
	var htmlTobeAdded = "<div class='panel-heading'>Corporate Details Company Opted For </div>";
	htmlTobeAdded += "<table class='table' id='corporateDetailsMbaTable'>";
	if(corporateDetailsMba.noetbos == '1') {
		htmlTobeAdded += "<tr><td>Nomination of Experts	to board of study</td></tr>";
	}
	if(corporateDetailsMba.mdp == '1') {
		htmlTobeAdded += "<tr><td>Management Development Programmes</td></tr>";
	}
	if(corporateDetailsMba.vfm == '1') {
		htmlTobeAdded += "<tr><td>Visiting faculty/Mentoring</td></tr>";
	}
	if(corporateDetailsMba.sibmc == '1') {
		htmlTobeAdded += "<tr><td>Specific industry based management contests</td></tr>";
	}
	if(corporateDetailsMba.ioise == '1') {
		htmlTobeAdded += "<tr><td>Introduction of industry specific electives</td></tr>";
	}
	if(corporateDetailsMba.glcbil == '1') {
		htmlTobeAdded += "<tr><td>Guest lectures/Colloquia by industry leaders</td></tr>";
	}
	if(corporateDetailsMba.ecoe == '1') {
		htmlTobeAdded += "<tr><td>Establish centres of excellence</td></tr>";
	}
	if(corporateDetailsMba.soe == '1') {
		htmlTobeAdded += "<tr><td>Sponsorship of events(Management meets/Inter collegiate cultural festivals/Management quiz competitions)</td></tr>";
	}		
	if(corporateDetailsMba.iwaasbse == '1') {
		htmlTobeAdded += "<tr><td>Interaction with academia and students by senior executives</td></tr>";
	}				
	htmlTobeAdded += "</table>";
	return htmlTobeAdded;
}


function createFacultyDetailsMbaTable(data) {
	var facultyDetailsMba = data.facultyDetailsMba;
	var htmlTobeAdded = "<div class='panel-heading'>Faculty Details Company Opted For </div>";
	htmlTobeAdded += "<table class='table' id='facultyDetailsMbaTable'>";
	if(facultyDetailsMba.mdpcpcstp == '1') {
		htmlTobeAdded += "<tr><td>Management development programmes/Certificate programmes/Customised short term programmes</td></tr>";
	}
	if(facultyDetailsMba.c == '1') {
		htmlTobeAdded += "<tr><td>Consultancy</td></tr>";
	}	
	if(facultyDetailsMba.pm == '1') {
		htmlTobeAdded += "<tr><td>Project mentorship</td></tr>";
	}
	if(facultyDetailsMba.sii == '1') {
		htmlTobeAdded += "<tr><td>Sabbatical in industry</td></tr>";
	}
	if(facultyDetailsMba.cmempfce == '1') {
		htmlTobeAdded += "<tr><td>Customised MBA/Executive MBA programmes for company employees</td></tr>";
	}		
	htmlTobeAdded += "</table>";
	return htmlTobeAdded;
}

function createStudentDetailsMbaTable(data) {
	var studentDetailsMba = data.studentDetailsMba;
	var htmlTobeAdded = "<div class='panel-heading'>Student Details Company opted for </div>";
	htmlTobeAdded += "<table class='table' id='studentDetailsMbaTable'>";
	if(studentDetailsMba.iv == '1') {
		htmlTobeAdded += "<tr><td>Industry visit</td></tr>";
	}
	if(studentDetailsMba.ws == '1') {
		htmlTobeAdded += "<tr><td>Workshop/Seminar</td></tr>";
	}
	if(studentDetailsMba.p == '1') {
		htmlTobeAdded += "<tr><td>Projects</td></tr>";
	}
	if(studentDetailsMba.si == '1') {
		htmlTobeAdded += "<tr><td>Summer internship</td></tr>";
	}
	if(studentDetailsMba.pp == '1') {
		htmlTobeAdded += "<tr><td>Paper presentation</td></tr>";
	}	

	htmlTobeAdded += "</table>";
	return htmlTobeAdded;
}