<%@ page import="java.util.ArrayList" %>
<%@ page language="java" contentType="text/html; charset=US-ASCII"
    pageEncoding="US-ASCII"%>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/chat.css">
</head>

<body>
<!--    nav bar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

    <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/NewPlace/NewWeb/index.php">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/NewPlace/NewWeb/php/leaderboard.php">LEADERBOARD</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/NewPlace/NewWeb/php/debate.php">DEBATE ZONE</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown link
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
    </div>

    <ul class="nav navbar-nav navbar-right">
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navDropDownLink" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-address-book-o" style="font-size:30px"></i> <strong>My
                    Profile</strong>
            </a>
            <div class="dropdown-menu" aria-labelledby="navDropDownLink">
                <a class="dropdown-item" href="#">Edit Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Logout</a>
            </div>
        </li>
    </ul>

</nav>

  <div class="chat attached">
      <div class="chat-header">Topic</div>
      <div class="chat-body" id="chatBody">
          <div class="post me">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ultrices ultrices cursus.</p>
          </div>
          <div class="post you">
              <p>Curabitur maximus magna a elit mattis fringilla sed sed nisi?</p>
          </div>
          <div class="post me">
              <p>In viverra, risus gravida eleifend bibendum, eros nulla egestas diam, a fringilla velit massa ut eros.</p>
          </div>
          <div class="post me">
              <p>Fusce ullamcorper eros a tellus pellentesque fringilla</p>
          </div>
          <div class="post you">
              <p>Praesent id ipsum eleifend leo egestas suscipit ac sed mauris.</p>
          </div>
          <div class="post me">
              <p>Nulla eleifend urna at velit luctus mattis.</p>
          </div>
          <%
          
          for (String message : ((ArrayList<String>) request.getSession().getAttribute("messageList")))
          {
        	  out.print("<div class=\"post me\"><p>" + message + "</p></div>");
          }
          %>
      </div>
      <form method="post" action="http://localhost:8080/NewWeb/ChatServlet" class="chat-footer">
          <textarea type="text" name="message" rows="4" cols="80"></textarea>
          <button class="btn btn-primary">Send</button>
      </form>
  </div>
</body>
<script type="text/javascript" src="js/chat.js">
</html>
