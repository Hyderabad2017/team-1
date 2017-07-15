package AdminService;

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
@Path("admin")

public class AdminController {

	@POST 

	@Path("adminpost") 

	@Consumes(MediaType.APPLICATION_JSON) 

	@Produces({MediaType.APPLICATION_JSON,MediaType.APPLICATION_XML}) 
	public boolean adminauthenticate(Admin admin) throws SQLException, ClassNotFoundException 
	{
		//System.out.println(admin);
		boolean auth=false;
		String uname =admin.getAdminName();
		String pwd=admin.getPassword();
		Class.forName("com.mysql.jdbc.Driver"); 

		String jdbcUrl = "jdbc:mysql://localhost:3306/IandEye"; 

		       String username = "root"; 

		       String password = "Nidhi@97";  

		    Connection connection = null;    

		    connection = DriverManager.getConnection(jdbcUrl, username, password); 

		    Statement statement = connection.createStatement(); 
		    
		    String sql = "select * from admin "; 
		    
		    ResultSet rs = statement.executeQuery(sql); 

		    while(rs.next()){ 
		    	if(rs.getString("adminname")==uname && rs.getString("password")==pwd)
		    	{
		    		
		    		auth=true;
		    	}
		    	else
		    	{
		    		auth=false;
		    	}
		    	
		    }
			return auth;
			
		
		
	}
	
	@POST 

	@Path("qual") 

	@Consumes(MediaType.APPLICATION_JSON) 

	@Produces({MediaType.APPLICATION_JSON,MediaType.APPLICATION_XML}) 
	public boolean qualificationUpdate(String qual) throws SQLException, ClassNotFoundException 
	{
		boolean update=false;
		String quali =qual;
		Class.forName("com.mysql.jdbc.Driver"); 

		String jdbcUrl = "jdbc:mysql://localhost:3306/mysampledb"; 

		       String username = "root"; 

		       String password = "Nidhi@97";  

		    Connection connection = null;    

		    connection = DriverManager.getConnection(jdbcUrl, username, password); 

		    Statement statement = connection.createStatement(); 
		    
		    String sql = "insert into qualification values('"+quali+"')"; 
		    
		    statement.executeUpdate(sql);
		   
			return update;
			
		
		
	}
	
	
}
