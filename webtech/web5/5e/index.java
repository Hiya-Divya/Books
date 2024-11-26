import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;

public class PageCounterServlet extends HttpServlet {
    public void init() throws ServletException {
        ServletContext context = getServletContext();
        context.setAttribute("counter", 0);
    }

    protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        ServletContext context = getServletContext();
        int counter = (int) context.getAttribute("counter");
        counter++;
        context.setAttribute("counter", counter);

        response.setContentType("text/html");
        PrintWriter out = response.getWriter();
        out.println("<h1>Page visited " + counter + " times</h1>");
    }
}
