package Model;

import java.io.IOException;
import java.sql.*;

import javax.swing.JOptionPane;

//import com.mysql.jdbc.Connection;

public class DBConnection {

	Connection conn;

	public void connectMESucka() throws InstantiationException, IllegalAccessException, ClassNotFoundException, SQLException {

		 String driverName = "org.gjt.mm.mysql.Driver";
		//String driverName = "com.mysql.jdbc.Driver";

		Class.forName(driverName).newInstance();

		String serverName = "db1ajoom.db.7432654.hostedresource.com";
		//String serverName = "jdbc:mysql://hos:3306/";
		String mydatabase = "db1ajoom";
		String url = "jdbc:mysql://" + serverName + "/" + mydatabase;

		String username = "db1ajoom";
		String password = "Leaking91Ship";

		conn = DriverManager.getConnection(url, username, password);

		
		
		
		
	}

	public void closeConnection(Connection connectionToClose)
			throws SQLException {
		connectionToClose.close();

	}

	public Connection getConnection(DBConnection thisConnector) {

		return conn;
	}
}
