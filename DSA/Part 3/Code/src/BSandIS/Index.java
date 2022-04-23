package BSandIS;

class Index {
    public static int randomInteger(int min, int max) {
        return (int)(Math.random() * ((max - min) + 1)) + min;
    }
    public static void main(String[] args) {

        InsertionSor Ins = new InsertionSor();
        BinarySearch Bs = new BinarySearch();
        int[] arr = new int [1000];

        for(int i = 0; i < arr.length; i++) {
            arr[i] = randomInteger(100, 1000);
        }

        int[] sorted_array = Ins.sort(arr);
        //if not found will say return -1
        //example of not found: 857 found at -1

        System.out.println("857 found at " + Bs.search(sorted_array, 0, sorted_array.length - 1, 857));
        System.out.println("235 found at " + Bs.search(sorted_array, 0, sorted_array.length - 1, 235));
        System.out.println("78 found at " + Bs.search(sorted_array, 0, sorted_array.length - 1, 78));
        System.out.println("567 found at " + Bs.search(sorted_array, 0, sorted_array.length - 1, 567));
        System.out.println("165 found at " + Bs.search(sorted_array, 0, sorted_array.length - 1, 165));
        System.out.println("1020 found at " + Bs.search(sorted_array, 0, sorted_array.length - 1, 1020));


    }
}