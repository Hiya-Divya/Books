import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;

public class BookServlet extends HttpServlet {
    protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        response.setContentType("text/html");
        PrintWriter out = response.getWriter();
        out.println("<h1>Book Theme</h1>");
        out.println("<p>Title: The Great Gatsby</p>");
        out.println("<p>Author: F. Scott Fitzgerald</p>");
    }
}
