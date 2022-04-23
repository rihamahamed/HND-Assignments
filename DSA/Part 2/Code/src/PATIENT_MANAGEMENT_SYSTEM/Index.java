package PATIENT_MANAGEMENT_SYSTEM;
//Package detail
import java.util.Scanner;
// java user input scanner


class Index {

    static Queue q = new Queue(100);

    public static void main(String[] args) {
        program();
    }

    public static void program() {

        Scanner ip = new Scanner(System.in);
        //this ip input int value
        Scanner ip1 = new Scanner(System.in);
        //this ip1 input string value
        Scanner ip3 = new Scanner(System.in);
        //this ip input double value

        int ono, wno, age;
        double bl_Pr, su_Le;
        String p_Name, ty_Op;
        int mode;
        int choice;

        System.out.println("PATIENT MANAGEMENT SYSTEM");
        System.out.println("-------------------------");
        System.out.println("Please enter the mode number of the program>>");
        System.out.println("               "+"[1.Add  ]"+"               ");
        System.out.println("               "+"[2.Take ]"+"               ");
        System.out.println("               "+"[3.Close]"+"               ");
        System.out.print("ENTER THE MOOD NUMBER>>>"+"   ");

        mode = ip.nextInt();

        if (mode == 1) {
            System.out.print("Enter the order number      :"+"   ");
            ono = ip.nextInt();
            System.out.print("Enter the Patient Name      :"+"   ");
            p_Name = ip1.nextLine();
            System.out.print("Enter the ward number       :"+"   ");
            wno = ip.nextInt();
            System.out.print("Enter the patient age       :"+"   ");
            age = ip.nextInt();
            System.out.print("Enter the Type of Operation :"+"   ");
            ty_Op = ip1.nextLine();
            System.out.print("Enter the blood pressure    :"+"   ");
            bl_Pr = ip3.nextDouble();
            System.out.print("Enter the ward sugar level  :"+"   ");
            su_Le = ip3.nextDouble();

            Patient p = new Patient(ono, p_Name, wno, age, ty_Op, bl_Pr, su_Le);

            q.enqueue(p);

        } else if (mode == 2) {

            Patient removed = (Patient) q.dequeue();
            System.out.print("Patient " + removed.ono + "is ready to undergo " + removed.ty_Op + " surgery.");
        }
        else if (mode == 3)
            {
                System.out.println("SHUTDOWN THE PATIENT MANAGEMENT SYSTEM");
                System.exit(0);

            }
else {
        }
        program();

    }
}