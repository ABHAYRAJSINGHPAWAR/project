import { Container } from "react-bootstrap";
import Header from "./component/header.js"
import Footer from "./component/footer.js"
import Body from "./component/body.js"

const App = () => {
  return (
    <>
     <div>
      <Header/>
      </div>
      <div>
     
     
     <main className="py-3">
      <Container>
      
      <Body/>
      </Container>
     </main>
      
    
     </div>
    <div>
      <Footer/>
    </div>
    </>
  );
}

export default App;
