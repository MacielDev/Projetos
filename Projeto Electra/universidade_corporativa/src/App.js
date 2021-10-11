import React from "react";
import Header from "./components/header";
import BannerPrincipal from "./components/bannerPrincipal";
import SectionCursos from "./components/sectionCursos";
import BannerCursos from "./components/bannerCursos"
import Footer from "./components/footer";


function App(props) {
  return (
    <div className="container-lg">
      <Header />
      <BannerPrincipal />
      <BannerCursos/>
      <SectionCursos/>
      <Footer/>

    </div>
  );
}
export default App;
