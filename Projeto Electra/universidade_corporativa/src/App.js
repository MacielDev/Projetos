import React from "react";
import Header from "./components/header";
import BannerPrincipal from "./components/bannerPrincipal";
import SectionCursos from "./components/sectionCursos";
import BannerCursos from "./components/bannerCursos"
import Localization from "./components/localizacao";

function App(props) {
  return (
    <div className="container-lg">
      <Header />
      <BannerPrincipal />
      <BannerCursos/>
      <SectionCursos/>
      <Localization/>

    </div>
  );
}
export default App;
