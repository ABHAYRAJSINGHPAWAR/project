import { Navbar} from 'react-bootstrap';
import { FaFacebook,FaGoogle,FaApple,FaInstagram} from 'react-icons/fa';

const Footer =() =>{
    return (
        <footer>
            <Navbar bg='dark' variant ="dark" expand='md' collapseOnSelect>
               
                
            
            <table width='100%' bg='dark'>
                    <tbody>
                        <tr>
                            <td rowSpan='4' align='center'><h3>Lookscout</h3><br></br>
                            Generate outside the box<br></br>
                            thinking with the possibility to <br></br>
                            target the Low</td>
                            <td align='center'>Resources</td>
                            <td align='center'>Products</td>
                            <td rowSpan='4' align='center' width='20%'><p>Get Email notifications <br></br>
                            Generate outside the Box thinking with <br></br>
                            the possibility to target the Low </p>
                            <div class="input-group" >
  <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon"  />
  <button type="button" class="btn btn-outline-primary">search</button>
</div>
                            </td>
                        </tr>
                        <tr>
                            <td align='center'>Events</td>
                            <td align='center'>Solutions</td>
                        </tr>
                        <tr>
                            <td align='center'>Help Center</td>
                            <td align='center'>Features</td>
                        </tr>
                        <tr>
                            <td align='center'>Partners</td>
                            <td align='center'>Enterprise</td>
                        </tr>
                        <br></br>
                        <br></br>
                        <tr>
                            <th><p>@2023 Lookscout.All Rights Reserved</p></th>
                            <th></th>
                            <th></th>
                            <th align='Center'><FaFacebook/> <FaGoogle/> <FaApple/> <FaInstagram> </FaInstagram></th>
                        </tr>
                        
                        
                    </tbody>
                </table>
                </Navbar>
                
        </footer>
    )
}
export default Footer