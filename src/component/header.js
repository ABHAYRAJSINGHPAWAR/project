import { Navbar,Nav,Container} from 'react-bootstrap';
import { FaUncharted, FaUser } from 'react-icons/fa';


const Header =() =>{
    return (
        <header>
            <Navbar bg='dark' variant ="dark" expand='md' collapseOnSelect>
                
                <Container>
                    <Navbar.Brand href="/"><i class="bi bi-x-diamond-fill"></i>Lookscout</Navbar.Brand>
                    <Navbar.Toggle aria-controls='basic-navbar-nav'/>
                    
                    <Navbar.Collapse id='basic-navbar-nav'>
                        <Nav className='mb-lg-auto'>
                    <Nav.Link href='/home'>Home</Nav.Link>
                    <Nav.Link href='/product'>Our Products</Nav.Link>
                    <Nav.Link href='/Resources'>Resources</Nav.Link>
                    <Nav.Link href='/contact'>Contact</Nav.Link>
                    </Nav>
                        <Nav className='ms-auto'>
                            <Nav.Link href='/login'><FaUser />Log In</Nav.Link>
                            <Nav.Link href='/signup'><FaUncharted />Sign Up</Nav.Link>
                        </Nav>
                    </Navbar.Collapse>

                </Container>
                

                
            </Navbar>
            <Navbar bg='dark' variant ="dark"  >
             <Nav >
                <h1>Your Supercharged <br></br>Design Workflow.</h1>
                </Nav>   
                
                
                
               
                <Nav className='ms-auto'>
                <img src="sample.jpg" alt="Italian Trulli" width="250" height="360" ></img>
                </Nav>
                
            </Navbar>
            <Navbar bg='dark' variant ="dark" expand='md' collapseOnSelect>
            <Nav className='ml-auto'>
                <p>
                    We`ve been told it is not possible to overachieve our customers`expectations<br></br>
                    .we have not reinvented the wheel,we decided to build upon it.
                </p>
                </Nav>
                
                </Navbar>
                <Navbar bg='dark' variant ="dark" expand='md' collapseOnSelect>
                <button type="button" class="btn btn-primary">Get Started</button>
                    </Navbar>
        </header>
    )
}
export default Header