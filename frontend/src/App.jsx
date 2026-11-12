import { Link, Route,BrowserRouter as Router, Routes } from "react-router-dom";
import Home from "./pages/Home";
import Navbar from "./components/Navbar";
import Login from "./pages/Login";
import Register from "./pages/Register";

function App() {      
return (
<Router>
  <Navbar />
   
  <Routes> 
    <Route path="/" element={<Home />} />
    <Route path="/Login" element={<Login />} />
    <Route path="/Register" element={<Register />} />

  </Routes>
</Router>

  );

}

  export default App;
