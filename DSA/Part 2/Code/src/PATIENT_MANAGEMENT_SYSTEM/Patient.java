package PATIENT_MANAGEMENT_SYSTEM;


class Patient {
    int ono;
    String p_Name;
    int wno;
    int age;
    String ty_Op;
    double bl_Pr;
    double su_Le;



        Patient(int a, String b, int c, int d, String e, double f, double g) {
            ono = a;
            p_Name = b;
            wno = c;
            age = d;
            ty_Op = e;
            bl_Pr = f;
            su_Le = g;
        }

        public int getID()
        {
            return this.ono;
        }
}

