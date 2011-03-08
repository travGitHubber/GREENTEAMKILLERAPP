package View;

import java.awt.Graphics;

import javax.swing.JButton;
import javax.swing.JComponent;
import javax.swing.JLabel;
import javax.swing.JPanel;
import javax.swing.JTextArea;

import Utilities.GuiInit;

public class MyView extends JComponent {

	// add the display area to the applet
	GuiInit util = new GuiInit();
	String ResultOfQuerry="";
	String [] ColumnHeaders;
	JTextArea textOutput;
	JButton connectButton;
	JButton disconnectButton;
	JTextArea textInput;
	JButton submitButton;
	JLabel appName;
	JLabel boxID1;
	JLabel boxID2;
	
	
	
	
	
	// variables for item placement in the applet
	int xBorder = 10;
	
	
	public MyView()
	{
		//util.setUpGui(this); // pass this view into the util for initialization, this loads all buttons menus etc into the applet
		// different approach to add each item as an instance variable to act on
		textOutput = util.addTextArea(this,xBorder, 120, 400, 100, false );
		textOutput.setLineWrap(true);
		connectButton = util.addButtons(this, "Connect", xBorder, 50, 100, 30);
		disconnectButton= util.addButtons(this,"Disconnect", xBorder+connectButton.getWidth()+10,50	 , 100, 30);
		textInput = util.addTextArea(this,xBorder, 220, 400, 200, true );
		textInput.setLineWrap(true);
		submitButton = util.addButtons(this, "Submit", xBorder, textInput.getY()+textInput.getHeight()+30, 100, 30);
		submitButton.setEnabled(false);
		// add scroll panes
		util.addScrollPanes(this,textInput,xBorder, 250, 400, 200);
		
		util.addScrollPanes(this, textOutput,xBorder, 100, 400, 100);
		
		boxID1= new JLabel("Console output:");
		boxID1.setBounds(textOutput.getX(), textOutput.getY()-10, 150, 30);
		this.add(boxID1);
		boxID2= new JLabel("Command Input:");
		boxID2.setBounds(textInput.getX(), textInput.getY()-10, 150, 30);
		this.add(boxID2);
		appName= new JLabel("Green Machine Database Access");
		appName.setBounds(10,0,400, 30);
		
		this.add(appName);
	}
	
	
	public void setTextOut(String outPutText){
		textOutput.append("\n" +outPutText);
	}
	
	public JButton getButton(MyView view, String buttonSelection){
		JButton selectedButton;
		for(JButton j : GuiInit.getButtonList())
		{
			if(j.getText().equals(buttonSelection))
			{
				// a button match is found return the right button
			selectedButton= j;
			return selectedButton;
			}
		}
		
		System.out.println("Error assigning attribut to button");
		return null;
	}
	// returns the text input area
	public JTextArea getTextInputField(){
		return textInput;
	}
	
	public void updateAllMenuItems(MyView thisView){
		thisView.connectButton.repaint();
		thisView.disconnectButton.repaint();
		thisView.textInput.repaint();
		thisView.textOutput.repaint();
		thisView.submitButton.repaint();
		
	}
	
	public JButton getSubmit(){
		return submitButton;
	}
	
	
	
	
	
	
	
	
	
	
}
