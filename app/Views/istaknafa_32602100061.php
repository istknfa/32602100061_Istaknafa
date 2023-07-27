<?= $this->extend('layout/32602100061_istaknafa')?>
<?= $this->section('content')?>
<div class="about">
  <div class="about-us">
    <h1>About Us</h1>
    <p>\An undergraduate student at the Faculty of Industrial Technology, majoring in Informatics Engineering from the Islamic University of Sultan Agung Semarang</p>
  </div>
  <br>
  <div class="about-experience">
    <h1>Experience</h1>
    <div class="about-experience-list">
      <table border='1'>
        <tr>
          <th rowspan='3'>2020</th>
          <th colspan='2'>Network Administrator</th>
          <th rowspan='3'>2022</th>
          <th colspan='2'>Web Development</th>
        </tr>
        <tr>
          <td>Semarang</td>
          <td>Indonesia</td>
          <td>Semarang</td>
          <td>Indonesia</td>
        </tr>
        <tr>
          <td colspan='2'>Design and build computer network infrastructure and computer hardware. Installing, troubleshooting and repairing computer network infrastructure and hardware.</td>
          <td colspan='2'>Designing a website from scratch, creating coding, etc., or a Web Developer can develop an existing website. Web Developers can work tied to companies, or become freelancers.</td>
        </tr>
      </table>
    </div>
  </div>
</div>
<style>
  /* app/Views/layout/32602100135_Sadra.css */
  .about {
    display:block;
    flex-direction: column;
    align-items: center;
  }

  .about-us,
  .about-experience {
    padding: 20px;
    text-align: center;
    background-color: #f2f2f2;
    border-radius: 10px;
    margin-bottom: 20px;
  }

  .about-us h1,
  .about-experience h1 {
    color: #333;
    margin-bottom: 10px;
  }

  .about-us p {
    font-size: 16px;
    color: #666;
  }

  .about-experience-list table {
    width: 100%;
    border-collapse: collapse;
  }

  .about-experience-list th,
  .about-experience-list td {
    padding: 10px;
    border: 1px solid #333;
  }

  .about-experience-list th {
    background-color: #f2f2f2;
    text-align: center;
    font-weight: bold;
  }

  .about-experience-list td {
    text-align: left;
    font-size: 14px;
  }

  @media (min-width: 600px) {
    /* Styles for larger screens */
    .about {
      flex-direction: row;
      justify-content: space-between;
      align-items: flex-start;
    }

    .about-us,
    .about-experience {
      flex: 1;
      margin: 0 10px;
    }

    .about-us p {
      font-size: 18px;
    }

    .about-experience-list td {
      font-size: 16px;
    }
  }

</style>

<?= $this->endSection() ?>