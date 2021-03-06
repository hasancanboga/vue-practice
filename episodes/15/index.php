<!DOCTYPE html>
<html lang="en" style='background-color: #222;'>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>

	<!-- <script src="https://unpkg.com/vue@2.6.12/dist/vue.min.js"></script>  -->
	<script src="https://unpkg.com/vue@2.6.12"></script>

</head>

<body style='color: white; padding-top: 40px;'>

	<div id='root' class='container'>

		<progress-view inline-template>
			<div>
				<h1> Your progress through this course ise {{ completionRate }}% </h1>

				<button @click="completionRate += 10">Update Completion Rate</button>
			</div>
		</progress-view>

	</div>

	<script src='main.js'></script>

</body>

</html>