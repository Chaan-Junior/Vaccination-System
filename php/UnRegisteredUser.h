UregisteredUser.h  

//Inheritance with RegisteredUser 

class UnregisteredUser 

{ 

    protected : 

        char name[30]; 

        char address[100]; 

        int contactNo; 

        char email[50]; 

    public: 

        UnregisteredUser(); 

        UnregisteredUser(char ur_name[],char ur_address[],int ur_contactNo, char ur_email[]); 

        void overViewSystem ();  

        void registeredUser (); 

        void displayDetails (); 

        ~UnregisteredUser ();     

}; 