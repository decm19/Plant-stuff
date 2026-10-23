<!DOCTYPE html>
<html lang="en" class="height-100">

<head>
	<meta charset="utf-8">
	<meta name="description" content="Kazuki Soma's profile page" />
	<meta name="keywords" content="FloraDB" />
	<meta name="author" content="Kazuki Soma" />
	<link rel="stylesheet" href="../style/style.css">

	<title>Kazuki Soma</title>
</head>

<body class="height-100 flex flex-col">
<?php include "project_members_header.php" ?>
	<main class="style-background-image kazuki-profile-background-image flex-grow p-1 flex justify-content-center">
		<div
			class="backdrop-filter-blur-5 background-ffffffa0 width-max-70 margin-horizontal-auto corner-1 p-1 flex flex-responsive flex-grow gap-1">
			<div
				class="flex-basis-0 flex flex-col align-items-center justify-content-start gap-0">
				<img src="../images/kazuki_assets/profile.jpg" alt="Profile picture"
					class="floating max-width-15 corner-100 aspect-ratio-1 object-cover border-groove border-ffffff10 p-20px">
				<div class="font-size-200">Kazuki</div>
				<table class="profile">
					<tr>
						<th scope="row">Student&#xA0;ID:</th>
						<td class="arial">105817315</td>
					</tr>
					<tr>
						<th scope="row">Course:</th>
						<td class="text-000000ff">Bachelor of Computer Science</td>
					</tr>
					<tr>
						<td colspan="2" class="text-center">
							<address><a
									href="mailto:105817315@students.swinburne.edu.my">105817315@students.swinburne.edu.my</a>
							</address>
						</td>
					</tr>
				</table>
			</div>
			<hr>
			<div class="flex-grow">
				<h2>About me</h2>
				<p>Hi. I'm Kazuki, and I like playing Minecraft, tinkering with servers and computers, and the
					occasional hiking trip to take nice pictures (like the background image you see here)</p>

				<p>I'm Japanese and I speak both English and Japanese. I have to admit that my english is significantly
					better, however.</p>

				<p>I don't really have a hometown to speak of. The closest thing I'd have to one is Osaka, Japan since I
					was born there, but I only lived there for about 4 years.</p>
				<figure class="flex flex-col align-items-center">
					<img class="height-20 corner-1" alt="Map of all the places Kazuki has lived"
						src="../images/kazuki_assets/map.png">
					<figcaption>All the places I've lived. As you can see, there are a lot.</figcaption>
				</figure>
				<p>I could call any of the red dots on the map above (except Sarawak... for now) my hometown, and yet
					none of them feel quite right to call my hometown on their own because that would discount the
					contribution of all the others.</p>

				<p>Anyways, I best get going now. I'll leave you with this amazing picture my mom got of me: </p>

				<img class="corner-1 width-100" alt="Kazuki standing under a " src="../images/kazuki_assets/mom_pic.jpg">
				<p class="text-align-right">- Kazuki</p>
			</div>
		</div>
	</main>
	<?php include "project_members_footer.php" ?>
</body>

</html>
