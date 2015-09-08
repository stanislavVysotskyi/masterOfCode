<?php

namespace masterofcodeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class JobController extends Controller
{
    /**
     * display list of jobs
     * @param integer $session
     * @return Response
     */
    public function listAction($session = null)
    {
        $jobs = $this->get('doctrine')
            ->getRepository('masterofcodeBundle:Job')
            ->findBy(array(), array('id' => 'DESC'));

        return $this->render('masterofcodeBundle:Job:list.html.twig', array('jobs' => $jobs, 'session' => $session));
    }

    /**
     * download converted file
     * @param integer $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function downloadAction($id)
    {
        $job = $this->get('doctrine')
            ->getRepository('masterofcodeBundle:Job')
            ->find($id);

        if ($job) {
            $response = new Response();
            $response->headers->set('Content-Type', 'audio/x-flac');
            $response->headers->set('Content-Disposition', 'attachment;filename="' . $job->getId() . '.flac');
            $response->setContent(
                file_get_contents($job->getDownloadPath())
            );
            return $response;

        } else {
            return $this->redirect($this->generateUrl('masterofcode_homepage'));
        }
    }

    /** get list of jobs in JSON format
     * @return json
     */
    public function lastAction()
    {
        $jobs = $this->get('doctrine')
            ->getRepository('masterofcodeBundle:Job')
            ->findBy(array(), array('id' => 'ASC'));

        return new Response($this->container->get('serializer')->serialize($jobs, 'json'));
    }
}