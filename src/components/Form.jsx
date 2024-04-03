import { useRef } from "react";
import emailjs from "@emailjs/browser";
import "../styles/style.css";

export const Form = () => {
  const form = useRef();

  const sendEmail = (e) => {
    e.preventDefault();

    emailjs
      .sendForm("service_yctc54g", "template_j759tpl", form.current, "F69cjF5zEssOgB-Es")
      .then(
        () => {
          console.log("SUCCESS!");
        },
        (error) => {
          console.log("FAILED...", error.text);
        }
      );
  };

  return (
    
  );
};
