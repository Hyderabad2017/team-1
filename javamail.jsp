<%@ page import="java.util.*,javax.servlet.*,javax.servlet.http.*" %>
<%@ page import="javax.mail.*" %>
<%@ page import="javax.mail.internet.*" %>
<%
      String to=request.getParameter("mail");
      String from = "suchitrawtproject@gmail.com";//change accordingly
      final String password = "wtproject";//change accordingly

      // Assuming you are sending email through relay.jangosmtp.net
      String host = "smtp.gmail.com";

      Properties props = new Properties();
          props.put("mail.smtp.host", "smtp.gmail.com");    
          props.put("mail.smtp.socketFactory.port", "465");    
          props.put("mail.smtp.socketFactory.class",    
                    "javax.net.ssl.SSLSocketFactory");    
          props.put("mail.smtp.auth", "true");    
          props.put("mail.smtp.port", "25");

      	Session session2 = Session.getInstance(props,    
           new javax.mail.Authenticator() {    
           protected PasswordAuthentication getPasswordAuthentication() {    
           return new PasswordAuthentication(from,password);  
           }    
      });

      try {
        MimeMessage message = new MimeMessage(session2);    
           message.addRecipient(Message.RecipientType.TO,new InternetAddress(to));    
           message.setSubject("Registered for webchat");    
           message.setText("Confirmation Email from WebChat Successfully registered ---Thanks");    
           Transport.send(message);    
           out.println("message sent successfully");    
          } 
	catch (MessagingException e)
	 {
		out.println(e);
	 }    
 RequestDispatcher rd=request.getRequestDispatcher("register.jsp");
 rd.forward(request,response);
%>