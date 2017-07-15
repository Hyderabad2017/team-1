package StudentService;

import java.sql.Connection; 

import java.sql.DriverManager; 

import java.sql.ResultSet; 

import java.sql.SQLException; 

import java.sql.Statement; 

import java.util.ArrayList; 

import java.util.List;

import javax.ws.rs.Consumes; 

import javax.ws.rs.GET; 

import javax.ws.rs.POST; 

import javax.ws.rs.Path; 

import javax.ws.rs.PathParam; 

import javax.ws.rs.Produces; 

import javax.ws.rs.core.MediaType;


@Path("students")
public class StudentController {

	//private StudentRepository users=new StudentRepositoryStub(); 


	@POST 

	@Path("student") 

	@Consumes(MediaType.APPLICATION_JSON) 

	@Produces({MediaType.APPLICATION_JSON,MediaType.APPLICATION_XML}) 

	public Student createUser(Student student) throws SQLException,ClassNotFoundException 

	{ 
		int id=student.getSid();
		String sname=student.getSname();
		String address=student.getSaddress();
		String email=student.getSemail();
		int number=student.getSnumber();
		String quali=student.getSquali();
		String pwd=student.getSpwd(); 
		String lang=student.getSlang(); 
		String gender=student.getSgender(); 

	Class.forName("com.mysql.jdbc.Driver"); 

	String jdbcUrl = "jdbc:mysql://localhost:3306/mysampledb"; 

	       String username = "root"; 

	       String password = "Nidhi@97";  

	    Connection connection = null;    

	    connection = DriverManager.getConnection(jdbcUrl, username, password); 

	    Statement statement = connection.createStatement(); 
	    
	    String sql = "insert into student values ("+id+",'"+sname +"','"+address+"','"+email+"',"+number+",'"+quali+"','"+pwd+"','"+lang+"','"+gender+"')"; 

	    statement.executeUpdate(sql);
	    //users.create(user);
	return student; 

	} 
	
	

	   
	

	} 

	 
