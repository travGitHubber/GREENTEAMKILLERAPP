package Utilities;

import java.awt.Color;
import java.awt.Dimension;
import java.io.IOException;
import java.net.URL;
import java.util.ArrayList;

import javax.imageio.ImageIO;
import javax.swing.BorderFactory;
import javax.swing.ImageIcon;
import javax.swing.JButton;
import javax.swing.JPasswordField;
import javax.swing.JScrollPane;
import javax.swing.JTextArea;
import javax.swing.border.Border;

import Controller.TestConnection;
import View.MyView;
import View.PWLogin;

public class GuiInit {
	// list of all buttons added, used for changing button attributes by the controller
	private static ArrayList<JButton> buttonList= new ArrayList<JButton>();
	private static ArrayList<JButton> buttonListPasswordScreen= new ArrayList<JButton>();

	// takes in and returns a view object with all compenents loaded

	public MyView setUpGui(MyView viewToSetup) {

		// perform ops to add buttons menus etc
		
		
		//System.out.println("completed view returned");
		return viewToSetup;
	}

	// helper methods

	// text output area

	public JTextArea addTextArea(MyView viewToSetup, int boundsX, int boundsY, int boundsWidth, int boundsHeight, boolean editable) {

		JTextArea textOutput = new JTextArea();
		textOutput.setBounds(boundsX, boundsY, boundsWidth, boundsHeight);
		textOutput.setEditable(editable);
		
		
		Border myBorder = BorderFactory.createLineBorder(Color.black); 
		textOutput.setBorder(myBorder);
		 // add the text area to the view
		System.out.println("text area added");
		
		
		
		
		
		return textOutput;
	}
	
	public JTextArea addTextArea( int boundsX, int boundsY, int boundsWidth, int boundsHeight, boolean editable) {

		JTextArea textOutput = new JTextArea();
		textOutput.setBounds(boundsX, boundsY, boundsWidth, boundsHeight);
		textOutput.setEditable(editable);
		
		Border myBorder = BorderFactory.createLineBorder(Color.black); 
		textOutput.setBorder(myBorder);
		 // add the text area to the view
		System.out.println("text area added");
		
		
		
		
		
		return textOutput;
	}
	
	public JPasswordField addPasswordArea( int boundsX, int boundsY, int boundsWidth, int boundsHeight, boolean editable){
		JPasswordField passwordArea = new JPasswordField();
		passwordArea.setBounds(boundsX, boundsY, boundsWidth, boundsHeight-2);
		passwordArea.setEditable(true);
		
		Border myBorder = BorderFactory.createLineBorder(Color.black); 
		passwordArea.setBorder(myBorder);
		
		return passwordArea;
		
		
	}
	
	// add scroll panes
	
	public MyView addScrollPanes(MyView updatedView, JTextArea jtext, int boundsX, int boundsY, int boundsWidth, int boundsHeight){
		JScrollPane scroll = new JScrollPane(jtext);
		//scroll.setSize(10, jtext.getHeight());
		//scroll.add(jtext);
		scroll.setVerticalScrollBarPolicy(JScrollPane.VERTICAL_SCROLLBAR_ALWAYS);
		scroll.setVisible(true);
		scroll.setBounds(boundsX	, boundsY, boundsWidth, boundsHeight);
		updatedView.add(scroll);
		return updatedView;
	}
	
	public PWLogin addScrollPanes(PWLogin updatedView, JTextArea jtext, int boundsX, int boundsY, int boundsWidth, int boundsHeight){
		JScrollPane scroll = new JScrollPane(jtext);
		//scroll.setSize(10, jtext.getHeight());
		//scroll.add(jtext);
		//scroll.setVerticalScrollBarPolicy(JScrollPane.VERTICAL_SCROLLBAR_ALWAYS);
		scroll.setVisible(true);
		scroll.setBounds(boundsX	, boundsY, boundsWidth, boundsHeight);
		updatedView.add(scroll);
		return updatedView;
	}
	// add buttons
	public JButton addButtons(MyView viewToSetup, String buttonName, int boundsX, int boundsY, int boundsWidth, int boundsHeight){
		
		JButton thisButton = new JButton(buttonName);
		thisButton.setBounds(boundsX, boundsY, boundsWidth, boundsHeight);
		viewToSetup.add(thisButton);
		thisButton.setVisible(true);
		System.out.println("Button added");
		// add the button to the overall button list
		buttonList.add(thisButton);
		
		
		
		return thisButton;
	}
	/**
	 * This method returns the submit button for the PW screen
	 * @param viewToSetup
	 * @param buttonName
	 * @param boundsX
	 * @param boundsY
	 * @param boundsWidth
	 * @param boundsHeight
	 * @return
	 */
	public JButton addSubmitPasswordButton(PWLogin viewToSetup, String buttonName, int boundsX, int boundsY, int boundsWidth, int boundsHeight){
		JButton thisButton = new JButton(buttonName);
		thisButton.setBounds(boundsX, boundsY, boundsWidth, boundsHeight);
		viewToSetup.add(thisButton);
		
		thisButton.setVisible(true);
		System.out.println("Button " + buttonName + " added");
		
		buttonListPasswordScreen.add(thisButton);
		return thisButton;
		
	}
	
	public static ArrayList<JButton> getButtonList(){
		return buttonList;
	}
	
	public static void  setUpActionEventsForButtons(TestConnection tester){
		for(int i=0; i<buttonList.size();i++){
			// do this for all buttons in the list
			buttonList.get(i).addActionListener(tester);
			if(buttonList.get(i).getText().equals("Connect"))
			{
				// set the command for the connect button
				buttonList.get(i).setActionCommand("connect");
				buttonList.get(i).setToolTipText("Press this to connect to the database.");
			}
			if(buttonList.get(i).getText().equals("Disconnect"))
			{
				// set the command for the connect button
				buttonList.get(i).setActionCommand("disconnect");
				buttonList.get(i).setToolTipText("Pressing this will disconnect you from the database.");
			}
			if(buttonList.get(i).getText().equals("Submit"))
			{
				// set the command for the connect button
				buttonList.get(i).setActionCommand("submit");
				buttonList.get(i).setToolTipText("Pressing this button submits the text in the input box as an SQL command.");
				
			}
			
			
			
		}
		// special case submit pw button
		
	}
	// used just for pw screen
	
	public static void setUpActionEventsForButtonsPW(TestConnection tester){
		for(int i = 0; i<buttonListPasswordScreen.size(); i++){
			buttonListPasswordScreen.get(i).addActionListener(tester);
			buttonListPasswordScreen.get(i).setActionCommand("submitpassword");
			
		}
		
		
		
	}
	
	

}
