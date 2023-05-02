import java.util.ArrayList;

public class Customer {

    private String nama;
    private int uang;
    private boolean hasMaag;
    private ArrayList<String> allergies;

    public Customer(String nama, int uang, boolean hasMaag)
    {
        this.nama = nama;
        this.uang = uang;
        this.hasMaag = hasMaag;
        this.allergies = new ArrayList<>();
    }

    public void addAllergy(String allergy)
    {
        if(!this.getAllergies().contains(allergy.toLowerCase()))
        {
            this.getAllergies().add(allergy);
        } else
        {
            System.out.println("This allergy has been listed");
        }
    }

    public String getNama() {
        return nama;
    }

    public int getUang() {
        return uang;
    }

    public boolean isHasMaag() {
        return hasMaag;
    }

    public ArrayList<String> getAllergies() {
        return allergies;
    }

}
