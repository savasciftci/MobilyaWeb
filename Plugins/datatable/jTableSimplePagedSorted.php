<html>
  <head>

    <link href="themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
	<link href="Scripts/jtable/themes/metro/crimson/jtable.css" rel="stylesheet" type="text/css" />
	
	<script src="http://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
	    <script src="scripts/jtable/jquery.jtable.min.js" type="text/javascript"></script>

    <script src="scripts/jtable/jquery.jtable.js" type="text/javascript"></script>
	<link href="scripts/validationEngine/validationEngine.jquery.css" rel="stylesheet" type="text/css" />
 
	<!-- Import Javascript files for validation engine (in Head section of HTML) -->
	<script type="text/javascript" src="scripts/validationEngine/jquery.validationEngine.js"></script>
	<script type="text/javascript" src="scripts/validationEngine/jquery.validationEngine-en.js"></script>
	
  </head>
  <body>
	<div id="PeopleTableContainer" style="width:100%;"></div>
	<script type="text/javascript">

		$(document).ready(function () {

		    //Prepare jTable
			$('#PeopleTableContainer').jtable({
				title: 'Table of people',
				paging: true,
				pageSize: 3,
				sorting: true,
				defaultSorting: 'Name ASC',
				 columnResizable: true, //Actually, no need to set true since it's default
				columnSelectable: true, //Actually, no need to set true since it's default
                saveUserPreferences: true, //Actually, no need to set true since it's default
				actions: {
					listAction: 'PersonActionsPagedSorted.php?action=list',
					createAction: 'PersonActionsPagedSorted.php?action=create',
					updateAction: 'PersonActionsPagedSorted.php?action=update',
					deleteAction: 'PersonActionsPagedSorted.php?action=delete'
				},
				fields: {
					PersonId: {
						key: true,
						create: false,
						edit: false,
						list: false
					},
					Name: {
						title: 'Author Name',
						width: '40%'
					},
					Age: {
						title: 'Age',
						width: '20%'
					},
					RecordDate: {
						title: 'Record date',
						width: '30%',
						type: 'date',
						create: false,
						edit: false
					}
				},
				  //Initialize validation logic when a form is created
            formCreated: function (event, data) {
                data.form.find('input[name="Name"]').addClass('validate[required]');
                data.form.find('input[name="EmailAddress"]').addClass('validate[required,custom[email]]');
                data.form.find('input[name="Password"]').addClass('validate[required]');
                data.form.find('input[name="BirthDate"]').addClass('validate[required,custom[date]]');
                data.form.find('input[name="Education"]').addClass('validate[required]');
                data.form.validationEngine();
            },
            //Validate form when it is being submitted
            formSubmitting: function (event, data) {
                return data.form.validationEngine('validate');
            },
            //Dispose validation logic when form is closed
            formClosed: function (event, data) {
                data.form.validationEngine('hide');
                data.form.validationEngine('detach');
            }
			});

			//Load person list from server
			$('#PeopleTableContainer').jtable('load');

		});

	</script>
 
  </body>
</html>
