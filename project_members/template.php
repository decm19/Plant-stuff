<!--
	HOW TO USE THIS TEMPLATE

	1. Put your name in the <title> element in <head>
	2. Set a background image or background color using a class on <main>, e.g. by using YOURNAME-profile-background-image
	3. Edit the rest of <main> to your information
-->

<!DOCTYPE html>
<html lang="en" class="height-100">

<head>
	<meta charset="utf-8">
	<meta name="description" content="" />
	<meta name="keywords" content="FloraDB" />
	<meta name="author" content=" " />
	<link rel="stylesheet" href="../style/style.css">

	<title>YOUR_NAME</title>
</head>

<body class="height-100 flex flex-col">
<?php include "project_members_header.php" ?>
	<main class="style-background-image YOURNAME-profile-background-image flex-grow p-1 flex justify-content-center">
		<div class="backdrop-filter-blur-5 background-ffffffa0 width-max-70 margin-horizontal-auto corner-1 p-1 flex flex-responsive flex-grow gap-1">
			<div class="flex-basis-0 flex flex-col align-items-center justify-content-start gap-0">
				<img src="../images/YOURNAME_assets/profile.jpg" alt="Profile picture" class="floating max-width-15 corner-100 aspect-ratio-1 object-cover border-groove border-ffffff10 p-20px">
				<div class="font-size-200">YOUR_NAME</div>
				<table class="profile">
					<tr>
						<th scope="row">Student&#xA0;ID:</th>
						<td class="arial">101234567</td>
					</tr>
					<tr>
						<th scope="row">Course:</th>
						<td class="text-000000ff">Bachelor of COURSE_NAME</td>
					</tr>
					<tr>
						<td colspan="2" class="text-center">
							<address><a href="mailto:101234567@students.swinburne.edu.my">101234567@students.swinburne.edu.my</a>
							</address>
						</td>
					</tr>
				</table>
			</div>
			<hr>
			<div class="flex-grow">
				<h2>About me</h2>
				<!--
					feel free to format this part however you'd like. i'd suggest using <h3>, <p>, and anything else you want. instructions copied from the assignment pdf: 
					include personal profile, such as resume, interests, or information that is related to you. This extra information gives you an opportunity to extend the techniques you apply in your assignment, and should include:
					• Demographic information about you
					• Description of hometown
					• Your hobbies etc.
				-->
			</div>
		</div>
	</main>
	<?php include "project_members_footer.php" ?>
</body>

</html>
