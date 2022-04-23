public class BST {
    public static void main(String[] args) {

        BST tree = new BST();

        tree.insert(12);
        tree.insert(34);
        tree.insert(23);
        tree.insert(56);
        tree.insert(34);
        tree.insert(78);
        tree.insert(45);
        tree.insert(78);
        tree.insert(23);
        tree.insert(78);
        tree.insert(89);
        tree.insert(4);
        tree.insert(57);
        tree.insert(3);
        tree.insert(8);
        tree.insert(9);

        tree.traverseInorder();//3, 4, 8, 9, 12, 23, 23, 34, 34, 45, 56, 57, 78, 78, 78 89
        System.out.println("");
        tree.traversePreorder(); //12, 4, 3, 8, 9, 34, 23, 23, 56, 34, 45, 78, 57, 78, 79
        System.out.println("");
        tree.traversePostorder(); //3, 9, 8, 4, 23, 23, 45, 34, 57, 89, 78, 78, 78, 56, 34, 12

    }

    class Node {
        int d;
        Node left, right;

        public Node(int val) {
            d = val;
            left = right = null;
        }
    }

    Node root;

    BST()
    {
        root = null;
    }
    //insert func
    void insert(int d) {
        root = insWrap(root, d);
    }
    //wrapper func for recursive call for insert
    Node insWrap(Node root, int d) {

        if (root == null) {
            root = new Node(d);
            return root;
        }

        if (d < root.d)

            root.left = insWrap(root.left, d);

        else if (d > root.d)

            root.right = insWrap(root.right, d);

        return root;
    }
    void traversePostorder(Node node) {

        if (node == null)
            return;

        traversePostorder(node.left);

        traversePostorder(node.right);

        System.out.print(node.d + " ");

    }


    void traverseInorder(Node node) {
        if (node == null)
            return;

        traverseInorder(node.left);

        System.out.print(node.d + " ");

        traverseInorder(node.right);
    }

    void traversePreorder(Node node) {

        if (node == null)
            return;


        System.out.print(node.d + " ");

        traversePreorder(node.left);

        traversePreorder(node.right);
    }
    /* wrapper funcs to traverse recursively */
    void traversePostorder()  {

        traversePostorder(root);

    }

    void traverseInorder()  {

        traverseInorder(root);

    }

    void traversePreorder() {

        traversePreorder(root);

    }



}