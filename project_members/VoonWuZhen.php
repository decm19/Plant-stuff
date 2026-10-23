<!DOCTYPE html>
<html lang="en" class="height-100">

<head>
	<meta charset="utf-8">
	<meta name="description" content="Voon Wu Zhen's profile page" />
	<meta name="keywords" content="FloraDB" />
	<meta name="author" content="VWZ" />
	<link rel="stylesheet" href="../style/style.css">

	<title>Voon Wu Zhen</title>
</head>

<body class="height-100 flex flex-col">
<?php include "project_members_header.php" ?>
	<main class="style-background-image wuzhen-profile-background-image flex-grow p-1 flex justify-content-center">
		<div
			class="backdrop-filter-blur-5 background-ffffffa0 width-max-70 margin-horizontal-auto corner-1 p-1 flex flex-responsive flex-grow gap-1">
			<div class="flex-basis-0 flex flex-col align-items-center justify-content-start gap-0">
				<img src="../images/wuzhen_assets/profile.jpg" alt="Profile picture"
					class="floating max-width-15 corner-100 aspect-ratio-1 object-cover border-groove border-ffffff10 p-20px">
				<div class="font-size-200">Voon Wu Zhen</div>
				<table class="profile">
					<tr>
						<th scope="row">Student&#xA0;ID:</th>
						<td class="arial">106758389</td>
					</tr>
					<tr>
						<th scope="row">Course:</th>
						<td class="text-000000ff">Bachelor of Computer Science</td>
					</tr>
					<tr>
						<td colspan="2" class="text-center">
							<address><a
									href="mailto:106758389@students.swinburne.edu.my">106758389@students.swinburne.edu.my</a>
							</address>
						</td>
					</tr>
				</table>
			</div>
			<hr>

			<div class="flex-grow">
				<h2>About me</h2>

				<h3>Personal profile</h3>
				<p>Hi, I'm Voon Wu Zhen, a first-year Bachelor of Computer Science student at Swinburne University
					of Technology Sarawak.
					I enjoy building small web projects and learning how things work behind the screen. FloraDB is
					my first team projects.
				</p>

				<h3>Demographic information</h3>
				<ul>
					<li>Full name: Voon Wu Zhen</li>
					<li>Age: 19</li>
					<li>Nationality: Malaysian</li>
					<li>Languages: English, Mandarin, Bahasa Malaysia</li>
					<li>Course: Bachelor of Computer Science</li>
				</ul>

				<h3>My hometown</h3>
				<p>I'm from Kuching, a city in Sarawak. It is known for its delicious Laksa and Kolo Mee.
					I like its peaceful environment.</p>

				<h3>Hobbies and interests</h3>
				<ul>
					<li>Playing video games</li>
					<li>Playing the piano</li>
					<li>Playing badminton</li>
					<li>Listening to music</li>
				</ul>
			</div>
		</div>
	</main>
	<?php include "project_members_footer.php" ?>
</body>

</html>
