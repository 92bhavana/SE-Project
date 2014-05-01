$('#companyDetails').hide();

$("#capDetailsForm").submit(function(e) {
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
		url: "cap_details.php",
		data: { companyName: companyName }
	})
	.done(function( data ) {
		data = jQuery.parseJSON(data);
		var companyDetailsTable = createCompanyDetailsTable(data);
		var corporateDetailsTable = createCorporateDetailsTable(data);
		var facultyDetailsTable = createFacultyDetailsTable(data);
		var studentDetailsTable = createStudentDetailsTable(data);

		$("#companyDetails").html("");

		$("#companyDetails").append(companyDetailsTable);
		$("#companyDetails").append(corporateDetailsTable);
		$("#companyDetails").append(facultyDetailsTable);
		$("#companyDetails").append(studentDetailsTable);

		$('#companyDetails').show();

	});
}
function createCompanyDetailsTable(data) {
	var htmlTobeAdded = "<div class='panel-heading'>Details of the Company </div>";
	htmlTobeAdded += "<table class='table' id='companyDetailsTable'>";
	htmlTobeAdded += "<tr><td>Company Name </td><td>" + data.capCompany + "</td></tr>";
	htmlTobeAdded += "<tr><td>Contact Name </td><td>" + data.contactName + "</td></tr>";
	htmlTobeAdded += "<tr><td>Email </td><td>" + data.email + "</td></tr>";
	if (data.others != "") {
	htmlTobeAdded += "<tr><td>Others </td><td>" + data.others + "</td></tr>";			
	};
	htmlTobeAdded += "</table>";
	return htmlTobeAdded;
}

function createCorporateDetailsTable(data) {
	var corporateDetails = data.corporateDetails;
	var htmlTobeAdded = "<div class='panel-heading'>Corporate Details Company Opted For </div>";
	htmlTobeAdded += "<table class='table' id='corporateDetailsTable'>";
	if(corporateDetails.experts_nomination == '1') {
		htmlTobeAdded += "<tr><td>Nomination of Experts	to board of study</td></tr>";
	}
	if(corporateDetails.fdp == '1') {
		htmlTobeAdded += "<tr><td>Faculty Development Program</td></tr>";
	}
	if(corporateDetails.adjunct_faculty == '1') {
		htmlTobeAdded += "<tr><td>Adjunct Faculty</td></tr>";
	}
	if(corporateDetails.sibtc == '1') {
		htmlTobeAdded += "<tr><td>Specific industry based technical contests</td></tr>";
	}
	if(corporateDetails.ioisepicd == '1') {
		htmlTobeAdded += "<tr><td>Introduction of industry specific electives/Participate in curriculum development</td></tr>";
	}
	if(corporateDetails.glcbil == '1') {
		htmlTobeAdded += "<tr><td>Guest lectures/Colloquia by industry leaders</td></tr>";
	}
	if(corporateDetails.erf == '1') {
		htmlTobeAdded += "<tr><td>Establish research facilities</td></tr>";
	}
	if(corporateDetails.soets == '1') {
		htmlTobeAdded += "<tr><td>Sponsorship of events(Technical/Social)</td></tr>";
	}		
	if(corporateDetails.jpd == '1') {
		htmlTobeAdded += "<tr><td>Joint product development</td></tr>";
	}		
	if(corporateDetails.wwafcmmpfce == '1') {
		htmlTobeAdded += "<tr><td>Work with academia for customised M.Tech./MS Programmes for company executives</td></tr>";
	}		
	if(corporateDetails.owppfifadp == '1') {
		htmlTobeAdded += "<tr><td>Offer working products/Prototypes from industry for academia demo purpose</td></tr>";
	}		
	htmlTobeAdded += "</table>";
	return htmlTobeAdded;
}


function createFacultyDetailsTable(data) {
	var facultyDetails = data.facultyDetails;
	var htmlTobeAdded = "<div class='panel-heading'>Faculty Details </div>";
	htmlTobeAdded += "<table class='table' id='facultyDetailsTable'>";
	if(facultyDetails.edp == '1') {
		htmlTobeAdded += "<tr><td>Executive Development Program</td></tr>";
	}
	if(facultyDetails.consultancy == '1') {
		htmlTobeAdded += "<tr><td>Consultancy</td></tr>";
	}	
	if(facultyDetails.mentorship == '1') {
		htmlTobeAdded += "<tr><td>Mentorship</td></tr>";
	}
	if(facultyDetails.sabbatical == '1') {
		htmlTobeAdded += "<tr><td>Sabbatical in Industry</td></tr>";
	}
	if(facultyDetails.sponsored_research == '1') {
		htmlTobeAdded += "<tr><td>Sponsored Research</td></tr>";
	}		
	htmlTobeAdded += "</table>";
	return htmlTobeAdded;
}

function createStudentDetailsTable(data) {
	var studentDetails = data.studentDetails;
	var htmlTobeAdded = "<div class='panel-heading'>Student Details </div>";
	htmlTobeAdded += "<table class='table' id='studentDetailsTable'>";
	if(studentDetails.industry_visit == '1') {
		htmlTobeAdded += "<tr><td>Industry Visits</td></tr>";
	}
	if(studentDetails.workshops == '1') {
		htmlTobeAdded += "<tr><td>Workshops</td></tr>";
	}
	if(studentDetails.mini_projects == '1') {
		htmlTobeAdded += "<tr><td>mini_projects</td></tr>";
	}
	if(studentDetails.in_plant_training == '1') {
		htmlTobeAdded += "<tr><td>In Plant Training</td></tr>";
	}	

	htmlTobeAdded += "</table>";
	return htmlTobeAdded;
}