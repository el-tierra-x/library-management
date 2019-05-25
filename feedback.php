<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
 <script src="https://www.gstatic.com/firebasejs/5.6.0/firebase.js"></script>
 <script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
 <script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.6.0/firebase.js"></script>
    <script>
  // Initialize Firebase
    var config = {
        apiKey: "AIzaSyCEWiUAPzmrTLu5TvDF2o2YhiQ7G1CdSos",
        authDomain: "tinder-cfe91.firebaseapp.com",
        databaseURL: "https://tinder-cfe91.firebaseio.com",
        projectId: "tinder-cfe91",
        storageBucket: "tinder-cfe91.appspot.com",
        messagingSenderId: "233285345513"
        };
        firebase.initializeApp(config);
        
        var db = firebase.firestore();
        db.settings({
        timestampsInSnapshots: true
        });

        function senddata()
        {
            var sid=document.getElementById("sid").value;
            var name1=document.getElementById("name").value;
            var text1=document.getElementById("subject").value;
            /*db.collection("feedback").add({
                name:this.name1,
                sid:this.sid,
                feed=this.text1
            })*/
            db.collection("feedback").add({
                sid: sid,
                name: name1,
                feedback: text1
            })
            .then(function(docRef) {
             console.log("Document written with ID: ", docRef.id);
            })
            .catch(function(error) {
            console.error("Error adding document: ", error);
            });
            alert("Thank You for the feedback");
            call();
        }
    </script>
</head>
<body>

<h3>Contact Form</h3>

<div class="container">
  <!--<form action="">-->
    <label for="fname">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name.." required="">

    <label for="lname">SID</label>
    <input type="text" id="sid" name="sid" placeholder="Your Student ID" required="">
    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Your FeedBack Here" required="" style="height:200px"></textarea>

    <input type="submit" value="Submit" onclick="senddata()">
    <?php
        header("refresh:10;url=index.php");
    
        ?>
  <!--</form>-->
</div>

</body>
</html>
