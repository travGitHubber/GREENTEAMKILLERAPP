package Utilities;

import java.io.File;
import java.io.FileNotFoundException;
import java.io.IOException;
import java.io.InputStream;
import java.net.URL;
import java.util.ArrayList;
import java.util.Scanner;

import Controller.TestConnection;

public class PWchecker {
	// compares pw file to user entry

	public static boolean passWordChecker(String userName, String password,
			TestConnection tester) throws FileNotFoundException {
// this is the password file
		//File input = new File(tester.getCodeBase().getFile() + "DBPW.txt");

		//Scanner pwReader = new Scanner(input);
//look through the pw file
		//while (pwReader.hasNext()) {
			//System.out.println("checking this user " + userName);
			//String userN = pwReader.next();
			//String pw = pwReader.next();
			
			// tests to see if parser is the issue
			String userN = "test";
			String pw = "test";
			//check name
			if (userN.equals(userName)) {
				// now check password
				System.out.println("one match");
				if (pw.equals(password)) {
					System.out.println("password match");
					return true;
				}
			}

		//}
		return false;

	}

}
