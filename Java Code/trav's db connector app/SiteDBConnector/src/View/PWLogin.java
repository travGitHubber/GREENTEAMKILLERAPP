package View;

import java.awt.Graphics;
import java.awt.Image;
import java.awt.LayoutManager;
import java.io.IOException;
import java.net.URL;

import javax.imageio.ImageIO;
import javax.swing.ImageIcon;
import javax.swing.JButton;
import javax.swing.JComponent;
import javax.swing.JLabel;
import javax.swing.JPanel;
import javax.swing.JPasswordField;
import javax.swing.JTextArea;

import Utilities.GuiInit;

public class PWLogin extends JComponent{
// class to test pw 
	GuiInit util = new GuiInit();
	JPasswordField passWord;
	JTextArea userName;
	public JButton submit;
	JLabel passLabel;
	JLabel userLabel;
	Image greenImg;
	//MyDrawingArea dPane = new MyDrawingArea();
	JLabel pwMessage;
	LayoutManager lManager; // must look into this
	JLabel appName;
	
	
	public PWLogin(){
		
		userName=util.addTextArea( 10, 100, 100, 30, true);
		util.addScrollPanes(this, userName, 10, 100, 100, 30);
		passWord=util.addPasswordArea(userName.getX()+userName.getWidth()+20, userName.getY(), 100, 30, true);
		//util.addScrollPanes(this, passWord,userName.getX()+userName.getWidth()+20, userName.getY(), 100, 30);
		this.add(passWord);
		//util.addSubmitPasswordButton(this, "Submit Password", 10, 150, 140, 30);
		this.configureLabels();
		
		//this.add(dPane);
		//setUpImageBanner();
		//dPane.setVisible(true);
		//this.setIgnoreRepaint(true);
		//this.dPane.repaint();
		pwMessage= new JLabel("test...");
		pwMessage.setBounds(userName.getX(), userName.getY()+80, 150, 30);
		this.add(pwMessage);
		appName= new JLabel("Green Machine Database Access");
		appName.setBounds(10,0, 400, 30);
		
		this.add(appName);
		
	}
	
	public void configureLabels(){
		userLabel= new JLabel();
		userLabel.setBounds(userName.getX(), userName.getY()-40, 100, 30);
		userLabel.setText("User Name:");
		
		this.add(userLabel);
		
		passLabel = new JLabel();
		passLabel.setBounds(passWord.getX(), passWord.getY()-40, 100, 30);
		passLabel.setText("Password:");
		this.add(passLabel);
		
		
	}
	public  void setUpImageBanner(){
		try {
			
			//dPane.setBounds(0, 180, 300, 80);
			greenImg = ImageIO.read(new URL("http://travisb.info/green"));
			
			
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
			System.out.println(e.getMessage());
		}
		
		
		
	}
	public void setTextOut(String outPutText){
		pwMessage.setText(outPutText);
	}
	
	
	
	
	
	
	
	
	public String getUserName(PWLogin thisView){
		return thisView.userName.getText();
	}
	public String getPassword(PWLogin thisView){
		String s = "";
		char [] pw = thisView.passWord.getPassword();
		for(int i=0; i<pw.length;i++){
			s+=pw[i];
		}
		
		return s;
	}
	
	
	
}
