import java.util.Scanner;
import java.io.File;
import java.io.IOException;

class Ship
{
  public static void main(String args[])
  {
    int number,depature_date,number_of_seat,id,ch;
    String name,ship_type,originating_harbor,class_type;
    Scanner ob= new Scanner(System.in);
   
      System.out.println("Enter Ship ID: ");
      id= Integer.parseInt(ob.nextLine());
      System.out.println("Enter Ship Name: ");
      name= ob.nextLine();
      System.out.println("Enter Ship Type: ");
      ship_type=  ob.nextLine();
      System.out.println("Enter Originating Harbor: ");
      originating_harbor= ob.nextLine();
      System.out.println("Enter number: ");
      number= Integer.parseInt(ob.nextLine());
      System.out.println("Enter class_type: ");
      class_type=  ob.nextLine();
      System.out.println("Enter depature_date: ");
      depature_date= Integer.parseInt(ob.nextLine());
      System.out.println("Enter number_of_seat: ");
      number_of_seat=Integer.parseInt(ob.nextLine());
      System.out.println("Success");
      
      String sinfo = id+","+name+","+ship_type+","+originating_harbor+","+number+","+class_type+","+depature_date+","+number_of_seat+"\n";                
     
      System.out.println(sinfo);
  }
     
}

 