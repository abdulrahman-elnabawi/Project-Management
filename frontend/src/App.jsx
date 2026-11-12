import { Link, Route,BrowserRouter as Router, Routes } from "react-router-dom";
import Home from "./pages/Home";
import Navbar from "./components/Navbar";
import Login from "./pages/Login";

function App() {      
return (
<Router>
  <Navbar />
   
  <Routes> 
    <Route path="/" element={<Home />} />
    <Route path="/Login" element={<Login />} />

  </Routes>
</Router>

  );

}

  export default App;
