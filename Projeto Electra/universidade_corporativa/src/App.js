import React from "react";
import Header from "./components/header";
import BannerPrincipal from "./components/bannerPrincipal";

function App(props) {
  return (
    <div className="container-lg">
      <Header />
      <BannerPrincipal />
    </div>
  );
}
export default App;
