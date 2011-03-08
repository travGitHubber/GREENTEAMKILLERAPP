package Controller;

import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.io.FileNotFoundException;
import java.io.IOException;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.Stack;

import javax.swing.JApplet;
import javax.swing.JButton;
import javax.swing.Timer;

import com.mysql.jdbc.ResultSetMetaData;
import com.mysql.jdbc.Statement;

import Model.DBConnection;
import Utilities.GuiInit;
import Utilities.PWchecker;
import View.MyView;
import View.PWLogin;

public class TestConnection extends JApplet implements ActionListener {

	public Timer refreshTime = new Timer(200, this);
	DBConnection newConnection;
	MyView view;
	PWLogin passwordView;
	ResultSet result;
	int count;
	public boolean passwordEnteredCorrectly = false;
	JButton testButton;
	JButton submit;

	public void init() {
		// first display password page
		passwordView = new PWLogin();
		this.setSize(500, 500);

		testButton = new JButton("test v1.5");
		testButton.setBounds(10, 300, 180, 30);
		testButton.addActionListener(this);
		testButton.setActionCommand("testMe");
		submit = new JButton("Submit Password");
		submit.setActionCommand("submitpassword");
		submit.setBounds(10, 150, 180, 30);
		submit.addActionListener(this);
		passwordView.add(submit);
		passwordView.add(testButton);
		this.setRootPaneCheckingEnabled(true);
		this.rootPane.setContentPane(passwordView);
		GuiInit.setUpActionEventsForButtonsPW(this);
		// this.add(passwordView);

		// this.setContentPane(passwordView);

	}

	/**
	 * This method loads the DB connection page after pw was successful
	 * 
	 * @param viewToRemove
	 */
	public void switchViews(PWLogin viewToRemove) {

		// this.repaint();
		view = new MyView();
		// this.setSize(500, 500);
		this.remove(viewToRemove);

		// setup and define all action commands for buttons
		GuiInit.setUpActionEventsForButtons(this);
		// view.setVisible(true);
		// view.repaint(10);
		this.add(view);
		// this.setVisible(true);
		try {
			view.repaint();
			Thread.sleep(20);
		} catch (InterruptedException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		// causes the panel to repaint -------- figure this out later
		this.setSize(501, 500);
		this.setSize(500, 500);

	}

	public void actionPerformed(ActionEvent e) {
		if (e.getActionCommand().equals("testMe")) {
			testButton.setText("action worked");
		}

		if (e.getActionCommand().equals("connect")) {
			boolean connectOKBool = true;
			// connect button has been pressed, execute connection
			this.newConnection = new DBConnection();
			try {
				this.newConnection.connectMESucka();
			} catch (InstantiationException e1) {
				// TODO Auto-generated catch block
				e1.printStackTrace();
				view.setTextOut("connection failed(Instantiation Exc) : " + e1.getMessage());
				connectOKBool = false;
			} catch (IllegalAccessException e1) {
				// TODO Auto-generated catch block
				e1.printStackTrace();
				view.setTextOut("connection failed(Illegal Access) : " + e1.getMessage());
				connectOKBool = false;
			} catch (ClassNotFoundException e1) {
				// TODO Auto-generated catch block
				e1.printStackTrace();
				view.setTextOut("connection failed(Class exc) : " + e1.getMessage());
				connectOKBool = false;
			} catch (SQLException e1) {
				// TODO Auto-generated catch block
				e1.printStackTrace();
				view.setTextOut("connection failed(SQL excep) : " + e1.getMessage());
				StackTraceElement[] st =e1.getStackTrace();
				for(StackTraceElement s: st){
					view.setTextOut(s.toString());
				}
				
				
				connectOKBool = false;
			}

			if (connectOKBool) {
				view.setTextOut("Successful connection to Database.");
				view.getSubmit().setEnabled(true);
			}

		}

		if (e.getActionCommand().equals("submit")) {
			// connect button has been pressed, execute connection

			view.setTextOut("Attempting to submit SQL command...");

			String forExecution = view.getTextInputField().getText();
			// test the string before messing with the database

			if (forExecution.equals("")) {
				view.setTextOut("Invalid SQL command");

			} else {

				try {
					createAndExecuteStatement(forExecution);
					
					view.setTextOut("Command " + forExecution.toString()
							+ " executed successfully!!");
				} catch (SQLException e1) {
					// TODO Auto-generated catch block
					e1.printStackTrace();
					view.setTextOut(e1.getMessage());
				}

				// view.setTextOut(ex.getMessage());

				
				try {
					view.setTextOut(showResultSet(result));
				} catch (SQLException e1) {
					// TODO Auto-generated catch block
					view.setTextOut(e1.getMessage());
					e1.printStackTrace();
				}
				view.setTextOut("... Please enter another SQL command.");
				result = null;

			}

		}

		// the following section refers to disconnecting from the database
		if (e.getActionCommand().equals("disconnect")) {
			// connect button has been pressed, execute connection
			if (this.newConnection != null) {
				try {

					this.newConnection.closeConnection(this.newConnection
							.getConnection(this.newConnection));
					view.setTextOut("Connection was closed successfully!");
				} catch (SQLException s) {
					// TODO Auto-generated catch block
					s.printStackTrace();
					view.setTextOut(s.getMessage());
				}
			} else {
				view
						.setTextOut("There are no active connections to disconnect.");
			}
		}
		if (e.getActionCommand().equals("submitpassword")) {
			// check the password and return if ok
			try {
				submit.setText("submitting PW");
				passwordView.setTextOut("checking...");
				if (PWchecker.passWordChecker(passwordView
						.getUserName(passwordView), passwordView
						.getPassword(passwordView), this)) {
					// if checker returns true the password was good and we
					// should load up the db page
					submit.setText("pw was correct");
					this.switchViews(passwordView);
					// this.rootPane.setContentPane(view);
					this.setContentPane(view);
				} else {
					passwordView.setTextOut("Incorrect password");
				}
			} catch (IOException ex) {
				ex.printStackTrace();
				System.out.println(ex.getMessage());
				passwordView.setTextOut(ex.getMessage());
			}
		}

	}

	public static String showResultSet(ResultSet result) throws SQLException {
		if (result != null) {
			java.sql.ResultSetMetaData metaData = result.getMetaData();
			String displayResult = "";
			int columnCount = metaData.getColumnCount();
			// remember sql starts at 1 not 0 !!!
			for (int i = 1; i <= columnCount; i++) {
				if (i > 1) {
					displayResult += ", ";
				}
				displayResult += metaData.getColumnLabel(i);
			}
			displayResult += "\n";
			while (result.next()) {
				for (int i = 1; i <= columnCount; i++) {
					if (i > 1) {
						displayResult += ", ";

					}
					displayResult += result.getString(i);
				}
				displayResult += "\n";
			}
			if (displayResult.equals("")) {
				return "The data retrieval was not successful";
			} else {
				return displayResult;
			}
		} else {
			return "Invalid command";
		}

	}

	public java.sql.Statement createAndExecuteStatement(
			String statementToExecute) throws SQLException {
		java.sql.Statement thisStatement = newConnection.getConnection(
				newConnection).createStatement();

		// add code to fill the command into the statement

		boolean hasResultSet = thisStatement.execute(statementToExecute);
		if (hasResultSet) {
			result = thisStatement.getResultSet();
		} else {

			count = thisStatement.getUpdateCount();
		}
		return thisStatement;

	}
}
